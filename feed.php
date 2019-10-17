<?php
require_once('database.php');
if(isset($_POST["submit"])) {
    $name = $database->sanitize($_POST['name']);
    $email = $database->sanitize($_POST['email']);
    $occupation = $database->sanitize($_POST['occupation']);
    $message = $database->sanitize($_POST['message']);
    $image = $_FILES['image']['name'];

    $target_dir = "images/feedback/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
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
    if ($_FILES["image"]["size"] > 9000000) {
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
        echo "Sorry, your data was not uploaded. It could be happened for large image file(>8MB) or same named image file existance or inavlid image file type";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $insert = "INSERT INTO feedback(name,email,occupation,message,picture,datetime)VALUES('$name','$email','$occupation','$message','$image',NOW())";
            $res = mysqli_query($database->connection,$insert);
            if($res){
                header('Location: successfeed.html');
            }else{
                echo "The feedback has not been uploaded. Please try again.";
            }
        } else {
            echo "Sorry, there was an error uploading your Feedback.";
        }
    }

}
?>