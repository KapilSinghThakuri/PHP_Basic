<?php
    $ename = $_REQUEST['name'];
    $eage = $_REQUEST['age'];
    $eaddress = $_REQUEST['address'];
    $eemail = $_REQUEST['email'];
    $esalary = $_REQUEST['salary'];

    $errors = [];
    if (empty($ename)) {
        $errors[] = "Employee name field is required.";
    }
    if (!is_numeric($eage)) {
        $errors[] = "Age must be a number.";
    }
    if (!filter_var($eemail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (!is_numeric($esalary) || $esalary < 0) {
        $errors[] = "Salary must be a positive number.";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "- $error <br>";
        }
    }
    else{
        $conn = mysqli_connect('localhost', 'root', 'kapil12345', 'phpAjaxDB') or die('Failed to connect database !!!');
        $query = "INSERT INTO Employees(name,age,address,email,salary)
                VALUES('{$ename}',$eage,'{$eaddress}','{$eemail}', $esalary)";
        if (mysqli_query($conn, $query)) {
            echo "Employee details added successfully !!!";
         }
        mysqli_close($conn);
    }
?>



