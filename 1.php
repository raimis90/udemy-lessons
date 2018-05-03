<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
		


		<?php  

		echo "<h1>Hello</h1>";
		echo "<br>";
		echo 90-30+15;
		echo "<br>";
		$numberList = array(12,4,42,5,3,'423', '<h1>Hello</h1>');
		echo $numberList[5] . "<br>";
		print_r ($numberList);

		$names = array ("First_name" => 'Raimundas', "Last_name" => 'Griskelis');
		echo $names['First_name'] . " " . $names ['Last_name'];


		/* 
		   Step 1:  Use the Echo Function to say hello with html h1                  tags embedded inside php.


		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.


		   */

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>