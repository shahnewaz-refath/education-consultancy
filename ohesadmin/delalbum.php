<?php
	
	function rrmdir($dir) { 
		   if (is_dir($dir)) { 
		     $objects = scandir($dir); 
		     foreach ($objects as $object) { 
		       if ($object != "." && $object != "..") { 
		         if (is_dir($dir."/".$object) && !is_link($dir."/".$object))
		           rrmdir($dir."/".$object);
		         else
		           unlink($dir."/".$object); 
		       } 
		     }
		    rmdir($dir); 
		   } 
		}

	require_once('../database.php');
	$id = $_POST['x'];

	$dirqry = "SELECT * FROM album WHERE id_pk = '$id'";
	$dirres = mysqli_query($database->connection,$dirqry);
	$row = mysqli_fetch_array($dirres);

	$dir = 'images/photoalbum/'.$row['albumname'];
	$delalbum = "DELETE FROM album WHERE id_pk = '$id'";
	$ares = mysqli_query($database->connection,$delalbum);

	$delphoto = "DELETE FROM images WHERE album_id = '$id'";
	$pres = mysqli_query($database->connection,$delphoto);

	if($ares == true && $pres == true){
		rrmdir($dir);
		echo "Data successfully deleted";
	}else{
		echo "Data not deleted";
	}
?>