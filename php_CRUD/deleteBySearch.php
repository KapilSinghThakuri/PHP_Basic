<?php include 'layout/header.php'; ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">

                <div class="card p-2 mb-3">
                    <h3 class="text-center">Search Student By Id</h3>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group mb-3">
                            <label>Student Id</label>
                            <input type="text" name="sid" class="form-control">
                        </div>
                        <button type="submit" name="deleteBtn" class="btn btn-outline-success rounded">DELETE</button>
                    </form>
                </div>

                <?php
                if (isset($_POST['deleteBtn'])) {
                    $stud_id = $_POST['sid'];
                    include 'service/config.php';
                    $query = "DELETE FROM students WHERE id = {$stud_id}";
                    mysqli_query($conn, $query) or die('Query Unsuccessfull !!!');

                    header("Location: http://localhost/php_folder/php_CRUD/index.php");

                    mysqli_close($conn);
                }
                ?>
            </div>
        </div>
    </div>
<?php include 'layout/footer.php'; ?>