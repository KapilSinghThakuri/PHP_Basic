<?php
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        // move_uploaded_file(filename, destination);

        if (move_uploaded_file($file_tmp, 'uploads/' . $file_name)) {
            echo "File uploaded successfully !!!";
        }
        else{
            echo "File is not uploaded !!!";
        }
    }
    else{
        echo "File is not set !!!";
    }
?>