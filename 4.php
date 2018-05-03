<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

function calculation(){


	$num1 = 10;
	$num2 = 50;
	$sum = $num1 + $num2;
	return $sum;
}

$theSum = calculation();

echo $theSum;



echo "<br> -------------- <br>";
 echo pow(2,3);  //kelia kvadratu
 echo "<br>";
 echo rand(1,100); //atsitiktiniai skaiciai
echo "<br>";
echo sqrt(100); //istraukia sakni
echo "<br>";
echo ceil(9.6); //apvalina 
echo "<br>";
echo floor(9.6); //palieka sveika skaiciu

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */




	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>