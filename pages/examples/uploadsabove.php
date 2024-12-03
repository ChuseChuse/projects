<?php 
include 'db_connection.php';
include 'validation_function.php'; 
?>

<?php 

if (isset($_POST['submit'])){
    $nambayausajili=$_POST['nambayausajili'];
    $kwanza=$_POST['kwanza'];
    $pili=$_POST['pili'];
    $mwisho=$_POST['mwisho'];
    $lingine=$_POST['lingine'];
    $jinsi=$_POST['jinsi'];
    $tarehe=$_POST['tarehe'];
    $mahali=$_POST['mahali'];
    $jinamahali=$_POST['jinamahali'];
    $mkoa=$_POST['mkoa'];
    $wilaya=$_POST['wilaya'];
    $kata=$_POST['kata'];
    $kijiji=$_POST['kijiji'];
    $mkoa1=$_POST['mkoa1'];
    $wilaya1=$_POST['wilaya1'];
    $kata1=$_POST['kata1'];
    $kijiji1=$_POST['kijiji1'];

    $namba1=$_POST['namba1'];
    $kwanzam=$_POST['kwanzam'];
    $pilim=$_POST['pilim'];
    $mwishom=$_POST['mwishom'];
    $linginem=$_POST['linginem'];
    $mkoam=$_POST['mkoam'];
    $wilayam=$_POST['wilayam'];
    $katam=$_POST['katam'];
    $kijijim=$_POST['kijijim'];
    $nchim=$_POST['nchim'];
    $tarehem=$_POST['tarehem'];
    $numberm=$_POST['numberm'];
    $kazim=$_POST['kazim'];

    $namba2 = $_POST['namba2'];
    $kwanzaB = $_POST['kwanzaB'];
    $piliB = $_POST['piliB'];
    $mwishoB = $_POST['mwishoB'];
    $lingineB = $_POST['lingineB'];
    $mkoaB = $_POST['mkoaB'];
    $wilayaB = $_POST['wilayaB'];
    $kataB = $_POST['kataB'];
    $kijijiB = $_POST['kijijiB'];
    $nchiB = $_POST['nchiB'];
    $tareheB = $_POST['tareheB'];
    $numberB = $_POST['numberB'];
    $kaziB = $_POST['kaziB'];

    $uhusiano = $_POST['uhusiano'];
    $namba3 = $_POST['namba3'];
    $jinamtoa = $_POST['jinamtoa'];
    $anwani = $_POST['anwani'];
    $number3 = $_POST['number3'];
    $bpepe = $_POST['bpepe'];
    $tareheT = $_POST['tareheT'];
    
if (empty($nambayausajili)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($kwanza)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($pili)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($mwisho)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($jinsi)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($tarehe)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($mahali)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($jinamahali)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($mkoa)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($wilaya)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kata)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kijiji)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($mkoa1)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($wilaya1)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kata1)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kijiji1)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($namba1)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($kwanzam)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($pilim)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($mwishom)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($mkoam)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($wilayam)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($katam)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kijijim)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kazim)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($nchim)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($numberm)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($tarehem)) {
 header("Location: above.php?error=empty");
 exit();
}
 if (empty($namba2)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($kwanzaB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($piliB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($mwishoB)) {
 header("Location: above.php?error=empty");
 exit();
}

if (empty($mkoaB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($wilayaB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kataB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kijijiB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($kaziB) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($nchiB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($numberB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($tareheB)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($uhusiano)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($jinamtoa)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($bpepe)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($anwani)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($namba3)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($tareheT)) {
 header("Location: above.php?error=empty");
 exit();
}
if (empty($number3)) {
 header("Location: above.php?error=empty");
 exit();
}

 	$file = $_FILES['file'];
 if (empty($file)) {
 header("Location: above.php?error=emptyfile");
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
                 $query = "INSERT INTO above (namba_ya_usajili, jina_kwanza, jina_pili, jina_mwisho, jina_lingine, jinsi, tarehe_kuzaliwa, mahali_alipozaliwa, jina_mahali, mkoa_zaliwa, wilaya_zaliwa, kata_zaliwa, kijiji_zaliwa, mkoa_makazi, wilaya_makazi, kata_makazi, kijiji_makazi, namba_ya_simu, jina_kwanza_mama, jina_pili_mama, jina_mwisho_mama, jina_lingine_mama, mkoa_makazi_mama, wilaya_makazi_mama, kata_makazi_mama, kijiji_makazi_mama, nchi_mama, tarehe_mama, namba_simu_mama, kazi_mama, namba_utambulisho_mama, namba_utambulisho_baba, jina_kwanza_baba, jina_pili_baba, jina_mwisho_baba, jina_lingine_baba, mkoa_makazi_baba, wilaya_makazi_baba, kata_makazi_baba, kijiji_makazi_baba, nchi_baba, tarehe_baba, namba_simu_baba, kazi_baba, uhusiano, namba_utambulisho_taarifa, jina_mtoa_taarifa, anwani, namba_simu_taarifa, barua_pepe, tarehe) 
                  VALUES ('$nambayausajili', '$kwanza', '$pili', '$mwisho', '$lingine', '$jinsi', '$tarehe','$mahali', '$jinamahali', '$mkoa', '$wilaya','$kata','$kijiji','$mkoa1','$wilaya1','$kata1','$kijiji1', '$number','$kwanzam','$pilim','$mwishom','$linginem','$mkoam','$wilayam','$katam','$kijijim','$nchim','$tarehem','$numberm','$kazim','$namba1','$namba2','$kwanzaB','$piliB','$mwishoB','$lingineB','$mkoaB','$wilayaB','$kataB','$kijijiB','$nchiB','$tareheB','$numberB','$kaziB','$uhusiano','$namba3','$jinamtoa','$anwani','$number3','$bpepe','$tareheT')";
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