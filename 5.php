<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->

<?php
if (isset($_POST['submit'])) {  
$uname = $_POST['username'];
$psw = $_POST['password'];	
echo "Your name: " . $uname;
echo "<br>";
echo "Your password: " . $psw;
echo "<br>";

if (strlen($uname) < 5) {
	echo "Vardas turi buti ilgesnis <br>";
}
if (strlen($uname) >10) {
	echo "Jusu vardas per ilgas <br>";
}

$names = array("Raimis", "Tomas", "Minde", "Petras");
if (!in_array($uname, $names)) {
	echo "Jus negalite prisijungti";
} else {
	echo "Sveiki";
}
}


?>
<article class="main-content col-xs-8">

<form action="" method="post">
	<input type="text" placeholder="Enter name" name="username">
	<input type="password" placeholder="Enter password" name="password">
	<input type="submit" name="submit">

</form>
	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>