<?php
require_once('../database.php');

    $name = $database->sanitize($_POST['fname']);
    $designation = $database->sanitize($_POST['designation']);
    $email = $database->sanitize($_POST['email']);
    $cnumber = $database->sanitize($_POST['cnumber']);
    $image = $_FILES['epic']['name'];
    
    $target_dir = "images/employee/";
    $target_file = $target_dir . basename($_FILES["epic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["epic"]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            // echo "File is not an image.";
            $uploadOk = 0;
        }
    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["epic"]["size"] > 9000000) {
        // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your data was not uploaded. It could be happened for large image file(>8MB) or same named image file existance or inavlid image file type(only png, jpg, jpeg, gif supported)";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["epic"]["tmp_name"], $target_file)) {
            $insert = "INSERT INTO employee(name,designation,email,contactnumber,picture)VALUES('$name','$designation','$email','$cnumber','$image')";
            $res = mysqli_query($database->connection,$insert);
            if($res){
                echo "The data has been inserted/uploaded.";
            }else{
                echo "The data has not been inserted.";
            }
        } else {
            echo "Sorry, there was an error uploading your picture.";
        }
    }


?>