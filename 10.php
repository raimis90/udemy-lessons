<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">



<?php 

class Car {
	 static $marke = "audi";
	var $wheels = 4;   ///var naudojama perduoti kintamuosius
	var $hood=1;
	var $engine = 1;

	 function MoveWheels() {
	 	echo "Wheel move";

	 }

}
  $bmw = new Car();
$bmw -> MoveWheels(); echo "<br>";
echo $bmw -> wheels;
echo "<br>";

echo Car::$marke; //static- galime naudoti bet kur, bet su klase.
echo "<br>";

 ?>



 <!-- inheritance -->


 <?php 


class Plane extends Car{   //extends - paveldi kitos klases bruozus





}

$jet = new Plane();

echo $jet -> wheels
  ?>

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>