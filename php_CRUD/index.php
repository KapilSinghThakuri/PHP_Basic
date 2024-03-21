<?php include 'layout/header.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center"> STUDENTS HOMEPAGE
                        <a href="create.php" class="btn btn-outline-info rounded float-end"> Add Student </a>
                        <a href="updateBySearch.php" class="btn btn-outline-info rounded float-end"> Search/Update </a>
                        <a href="deleteBySearch.php" class="btn btn-outline-info rounded float-end"> Search/Delete </a>
                    </h2>
                </div>
                <div class="card-body">
                    <?php
                    include 'service/config.php';

                    $query = "SELECT students.id AS student_id, students.name, students.age, students.address, courses.cname
                    FROM students
                    JOIN courses ON students.cid = courses.id";

                    $result = mysqli_query($conn, $query) or die("Query Unsuccessfull !!!");

                    if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $rows['student_id'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['age'] ?></td>
                                <td><?php echo $rows['address'] ?></td>
                                <td><?php echo $rows['cname'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $rows['student_id'] ?>" class="btn btn-outline-secondary rounded">EDIT</a>
                                    <a href="delete.php?id=<?php echo $rows['student_id'] ?>" class="btn btn-outline-danger rounded">DELETE</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>