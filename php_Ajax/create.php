<?php include '../php_layout/header.php'; ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div id="message"></div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Employee Details
                            <a href="index.php" class="btn btn-outline-info rounded float-end"> BACK </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="store.php" id="employeeForm" method="POST">
                            <div class="form-group mb-3">
                                <label>Employee Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Employee Age</label>
                                <input type="text" id="age" name="age" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Employee Address</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Employee Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Employee Salary</label>
                                <input type="text" id="salary" name="salary" class="form-control">
                            </div>
                            <button type="submit" id="saveBtn" class="btn btn-outline-success rounded">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#saveBtn').click(function(e){
                e.preventDefault();
                var employeeName = $('#name').val();
                var employeeAge = $('#age').val();
                var employeeAddress = $('#address').val();
                var employeeEmail = $('#email').val();
                var employeeSalary = $('#salary').val();
                if ( employeeName == "" || employeeAge == "" || employeeAddress == "" || employeeEmail == "" || employeeSalary == "") {
                    $('#message').removeClass().fadeIn().html('You must need to fill all fields !!!');
                    $('#message').addClass('alert alert-danger');
                }
                else
                {
                var formData = $('#employeeForm').serialize();
                console.log(formData);
                $.ajax({
                    url: 'store.php',
                    type: 'POST',
                    data: formData,
                    beforesend: function () {
                        $('#message').fadeIn();
                        $('#message').removeClass().addClass('alert alert-success').html('Loading response...');
                    },
                    success: function (response) {
                        console.log(response);
                        $('#employeeForm').trigger('reset');
                        $('#message').removeClass().fadeIn().html(response);
                        $('#message').addClass('alert alert-success');
                        setTimeout(function(){
                            $('#message').fadeOut('slow');
                        },4000);
                    },
                    error: function(response){
                        console.log(response);
                        }
                    });
                }
            })
        })
    </script>
<?php include '../php_layout/footer.php'; ?>

