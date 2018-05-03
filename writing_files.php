<?php 
//iraso i example.txt faila teksta

$file = "example.txt";

if($handle = fopen($file, 'w')) {
fwrite($handle, 'I love php blablabla...........');


fclose($handle);

} else {


	echo "kazkas negerai";
}





 ?>