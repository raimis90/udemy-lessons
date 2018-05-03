
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


 <h4>Prisijungimas su duomenu baze</h4>
 <?php


	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) {
	echo "DB prijungta" . "<br>";
} else {
	die("Neprisijungia prie DB");
}


$select = "SELECT * FROM users";
$result_1 = mysqli_query($connection,$select);
?>
<form action="" method="POST">
	
	<input type="username" name="uname">
	<input type="password" name="psw">

	<select name="id" id="">
<?php
while($row = mysqli_fetch_assoc($result_1)) {
	$id = $row['id'];
	echo "<option value='$id'>$id</option>";
}


?>
	<option value="$id">ID</option>	
</select>
	<input type="submit" name="btn" value="Paspausk">

</form>



	<?php  

if (isset($_POST['btn'])) {
	$password = $_POST['psw'];
	$username = $_POST['uname'];


$hashFormat = "$2y$10$";
$salt = "iusesimecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);  // slaptazodi pakeicia i crypt

if (!empty($username && $password)) {
	echo "Your Username: " . $username . "<br>"; 
	echo "Your password: " . $password;
} else {
	echo "Kazka blogai ivedete";
}


$query = "INSERT INTO users(username,password)";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if (!$result) {
	die ('Klaida siunciant duomenis arba jungiantis db' . mysqli_error());
}





	

}

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>