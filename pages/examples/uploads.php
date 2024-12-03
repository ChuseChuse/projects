<?php include 'db_connection.php'; ?>
<?php include 'validation_function.php'; ?>
<?php 
 if (isset($_POST['submit'])) {

    $jina= $_POST['jina'];
    $mahali= $_POST['mahali'];
    $baba= $_POST['baba'];
    $baba2= $_POST['baba2'];
    $jinsi= $_POST['jinsi'];
    $taifab= $_POST['taifab'];
    $mama= $_POST['mama'];
    $mama2= $_POST['mama2'];
    $taifam= $_POST['taifam'];
    $tarehe= $_POST['tarehe'];
    $tarehe2= $_POST['tarehe2'];
if (empty($jina)) {
header("Location: 90days.php?error=emptyfile");
exit();
 }
 if (empty($mahali)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($baba)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($baba2)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($mama)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($mama2)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($taifam)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($taifab)) {
header("Location: 90days.php?error=empty");
exit();
 }

  if (empty($tarehe)) {
header("Location: 90days.php?error=empty");
exit();
 }
  if (empty($tarehe2)) {
header("Location: 90days.php?error=empty");
exit();
 }

$file = $_FILES['file'];
if (empty($file)) {
header("Location: 90days.php?error=emptyfile");
exit();
 }	

 	$fileName= $_FILES['file']['name'];
 	$fileTmpname= $_FILES['file']['tmp_name'];
 	$fileSize= $_FILES['file']['size'];
 	$fileError= $_FILES['file']['error'];
 	$fileType= $_FILES['file']['type']; 

 	$fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("pdf");


    if (in_array($fileActualExt, $allowed) ) {
    	if ($fileError === 0) {
    		if ($fileSize < 1000000) {
                 $query = "INSERT INTO 90days (jina, mahali_alipozaliwa, jinsi, jina_la_baba, jina_baba_la_pili, taifa_la_baba, jina_la_mama, jina_mama_la_pili, taifa_la_mama, tarehe_kuzaliwa, tarehe_usajili) 
                  VALUES ('$jina', '$mahali', '$jinsi', '$baba', '$baba2', '$taifab', '$mama','$mama2', '$taifam', '$tarehe', '$tarehe2')";
                  $result= $connection ->query($query);
    			$fileNameNew = uniqid('', true).".".$fileActualExt;
    			$fileDestination = 'uploads/'. $fileNameNew;
    			move_uploaded_file($fileTmpname, $fileDestination);
    			
                  header("Location: 90days.php?success!");

    		}else{
    			header("Location: 90days.php?error=filesize!");
    		}
    	 
    	}
    	else{
    		header("Location: 90days.php?error=inupload!"); 
    	}
    	
    }
    else{
    	header("Location: 90days.php?error=filetype!");
    }
  
}
 ?>