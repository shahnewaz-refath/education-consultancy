<?php
	require_once('../database.php');

	$albumname = $database->sanitize($_POST['aname']);
	$albumcaption = $database->sanitize($_POST['acaption']);
	$albumname = strtolower($albumname);

	$check = "SELECT * FROM album WHERE albumname = '$albumname'";
	$checkres = mysqli_query($database->connection,$check);

	if(mysqli_num_rows($checkres) > 0){
		echo "Same Named album already exist";
	}else{
		$ainsert = "INSERT INTO album(albumname,albumcaption,datetime) VALUES('$albumname','$albumcaption',NOW())";
		// echo $ainsert;
		$ares = mysqli_query($database->connection,$ainsert);
		if($ares){
			$last_id = mysqli_insert_id($database->connection);
			// $newfolder = 
			if (!file_exists('images/photoalbum/'.$albumname)) {
			    mkdir('images/photoalbum/'.$albumname, 0777, true);

			    for ($i=0; $i <count($_FILES["albumpic"]["name"]) ; $i++) { 
			    	$target_dir = "images/photoalbum/$albumname/";
			    	$image = $_FILES['albumpic']['name'][$i];
				    $target_file = $target_dir . basename($_FILES["albumpic"]["name"][$i]);
				    $uploadOk = 1;
				    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				    // Check if image file is a actual image or fake image
				        $check = getimagesize($_FILES["albumpic"]["tmp_name"][$i]);
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
				    if ($_FILES["albumpic"]["size"][$i] > 9000000) {
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
				        if (move_uploaded_file($_FILES["albumpic"]["tmp_name"][$i], $target_file)) {
				            $insert = "INSERT INTO images(album_id,picture,datetime)VALUES('$last_id','$image',NOW())";
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
			    }
			    

			}
		}else{

		}
	}
?>