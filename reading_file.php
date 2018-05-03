<?php 
//iraso i example.txt faila teksta

$file = "example.txt";

if($handle = fopen($file, 'r')) {


echo fread($handle, 10) . "<br>"; //10 yra baitai, 1 baitas yra vienas charakteris arba: 
echo fread($handle, filesize($file));

fclose($handle);

} else {


	echo "kazkas negerai";
}





 ?>