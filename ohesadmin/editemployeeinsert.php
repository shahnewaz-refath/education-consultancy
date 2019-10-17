<?php
require_once('../database.php');

    $name = $database->sanitize($_POST['efname']);
    $designation = $database->sanitize($_POST['edesignation']);
    $email = $database->sanitize($_POST['eemail']);
    $cnumber = $database->sanitize($_POST['ecnumber']);
    $id = $database->sanitize($_POST['pid']);
    if(!isset($_FILES['eepic']) || $_FILES['eepic']['error'] == UPLOAD_ERR_NO_FILE){
        $update = "UPDATE employee SET name = '$name',designation = '$designation',email = '$email',contactnumber = '$cnumber' WHERE id_pk = '$id'";
        $res = mysqli_query($database->connection,$update);
        if($res){
            echo "The data has been updated successfully.";
        }else{
            echo "The data has not been updated successfully.";
        }
    }else{

        $getimg = "SELECT picture FROM employee WHERE id_pk = '$id'";
        $gres = mysqli_query($database->connection,$getimg);
        $grow = mysqli_fetch_array($gres);
        $previmage = 'images/employee/'.$grow['picture'];

        $image = $_FILES['eepic']['name'];
        $target_dir = "images/employee/";
        $target_file = $target_dir . basename($_FILES["eepic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["eepic"]["tmp_name"]);
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
        if ($_FILES["eepic"]["size"] > 9000000) {
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
            if (move_uploaded_file($_FILES["eepic"]["tmp_name"], $target_file)) {
                $update = "UPDATE employee SET name = '$name',designation = '$designation',email = '$email',contactnumber = '$cnumber',picture = '$image' WHERE id_pk = '$id'";
                $res = mysqli_query($database->connection,$update);
                if($res){
                    unlink($previmage);
                    echo "The data has been updated successfully.";
                }else{
                    echo "The data has not been updated successfully.";
                }
            } else {
                echo "Sorry, there was an error uploading your picture.";
            }
        }
    }
    
    
?>