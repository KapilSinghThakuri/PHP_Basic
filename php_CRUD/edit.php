<?php include 'layout/header.php'; ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Student Details
                            <a href="index.php" class="btn btn-outline-info rounded float-end"> BACK </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "kapil12345";
                        $dbname = "phpCRUD";
                        // Create connections with database
                        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed !!!");

                        $stud_id = $_GET['id'];
                        $query = "SELECT * FROM students WHERE id = {$stud_id}";
                        $result = mysqli_query($conn, $query) or die("Query Unsuccessfull !!!");
                        if (mysqli_num_rows($result)>0) {

                        ?>
                        <form action="update.php" method="POST">
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="form-group mb-3">
                                <label>Student Name</label>
                                <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" class="form-control">
                                <input type="text" name="sname" value="<?php echo $row['name']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Age</label>
                                <input type="text" name="sage" value="<?php echo $row['age'] ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Address</label>
                                <input type="text" name="saddress" value="<?php echo $row['address'] ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Student Course</label>
                                    <?php
                                        $query1 = "SELECT * FROM courses";
                                        $result1 = mysqli_query($conn, $query1) or die("Query Unsuccessfull !!!");
                                        if (mysqli_num_rows($result1) > 0) {
                                            echo '<select name="scourse" class="form-control">';
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                            if ($row['cid'] == $row1['id']) {
                                                $select = "selected";
                                            }else {
                                                $select = "";
                                            }
                                            echo "<option {$select} value='{$row1['id']}'> {$row1['cname']} </option>";
                                        }
                                        echo "</select>";
                                    }
                                    ?>
                            </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-outline-success rounded">UPDATE</button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'layout/footer.php'; ?>

