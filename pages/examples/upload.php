<?php 	

if (isset($_POST['wasilishahati'])) {
	$file = $_FILES['file'];

	$filename = $_FILES['file']['name'];
	$filetempname = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$fileerror = $_FILES['file']['error'];
	$filetype = $_FILES['file']['type'];


	$fileext = explode('.', $filename);
	$fileactualext = strtolower(end($fileext));
	$allowedext = array('pdf');

	if (in_array($fileactualext, $allowedext)) {
		if ($fileerror === 0) {
			if ($filesize < 2000000) {
				$filenamenew = uniqid('', true).'.'.$fileactualext;
				$filedestination = "uploads/".$filenamenew;
				move_uploaded_file($filetempname, $filedestination);
				echo "upload success";
			}else{
				echo "file is too big!";
			}
		}else{
			echo "There was an error in uploading this file";
		}
	}else{
		echo 'You can not upload file of this type';
	}

}



 ?>