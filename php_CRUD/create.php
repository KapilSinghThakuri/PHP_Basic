<?php include 'layout/header.php'; ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Student Details
                            <a href="index.php" class="btn btn-outline-info rounded float-end"> BACK </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="store.php" method="POST">
                            <div class="form-group mb-3">
                                <label>Student Name</label>
                                <input type="text" name="sname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Age</label>
                                <input type="text" name="sage" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Address</label>
                                <input type="text" name="saddress" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Course</label>
                                <select name="scourse" class="form-control">
                                    <option disabled selected>Select Courses</option>
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "kapil12345";
                                        $dbname = "phpCRUD";
                                        // Create connections with database
                                        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed !!!");
                                        $query = "SELECT * FROM courses";
                                        $result = mysqli_query($conn, $query) or die("Query Unsuccessfull !!!");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['cname']; ?> </option>
                                        <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-success rounded">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'layout/footer.php'; ?>

