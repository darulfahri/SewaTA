<html>
  <head>
    <title> jangan lupa bayar</title>
      <link rel="stylesheet" href="style1.css"/>
      
  </head>

  <body>
  	<div>

<?php 

 class pendefinisi {
 public function identitas (string $nama, string $nim){
 		echo " hai Nama Saya, $nama dan Nim : $nim saya pembuat web ini .</br>";
 	}	
 }

 $objek = new pendefinisi ();
 	$objek -> identitas ('Darul Fahri','21120118120007');

echo "JANGAN LUPA BAYAR !!!!!","<br/>","<br/>";

$cek = isset($_POST['fnama']);
$cek1 = isset($_POST['femail']);
$cek2 = isset($_POST['fdomain']);
$cek3 = isset($_POST['waktu']);


  if (!empty($cek || $cek1 || $cek2 || $cek3))  {

   	echo "terima kasih kepada : ", $_POST['fnama'], "<br />";
   	echo "tagihan dikirim ke email : ", $_POST['femail'], "<br />";
   	echo "dengan nama domain : ", $_POST['fdomain'], "<br />";
   	echo "tagihan sebesar : ", $_POST['waktu'], "<br />";

   	echo " Akan di kirim kepada email yang tertera , terima kasih sudah berlangganan :3 ", "</br>","</br>";
   	echo " Jika ingin mengisi kembali tekan tombol , isi kembali";
   }

   
 ?>
 <form method="post" action="sewaTA.php" id="form">
 	<input type="submit" name="back" value="ISI KEMBALI">
 	 </form>

 		</div>
	</body>
</html>