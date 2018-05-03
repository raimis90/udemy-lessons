<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  


for ($i = 0; $i<=10; $i++) {

	echo $i;
}

echo "<br>";

switch (10) {
	    case 4:
		echo "Ne 10";
		break;

		case 10:
		echo "10!!!!";
		break;
	
	default:
		echo "kazkas negerai";
		break;
}
echo "<br>";


function skaiciuotuvas($num1, $num2) {

	$sum=$num1+$num2;

	echo $sum;
}


skaiciuotuvas(6,3);

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>