<?php include('session.php');?>

<?php include 'includes/header.php';?>
<body>
	<style type="text/css">
	.error {color: #FF0000;}
</style>
<?php include 'includes/navbar.php';?>
<div class="container">
	<?php include 'includes/conn.php';?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="form-group">
			<label>كلمة المرور الجديدة</label>
			<input type="password" class="form-control" name="pass" value="" minlength="5" required>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">إرسال</button>
	</form>
	<?php
// check that $_POST is set or not
	if(isset($_POST["submit"])){

		$password = $_POST['pass'];
		if (!empty($username) && !empty($password)) {
			$sql = "UPDATE admin SET  passcode = '$password' WHERE id = 1";
			if (mysqli_query($conn, $sql)) {
				echo "تم تغيير كلمة المرور";
			} else {
				echo '<span class="error">' . 'Invalid Data' .  '</span>';
			}

		}
		else {
			echo '<span class="error">' . 'Invalid Data' .  '</span>';
			mysqli_close($conn);
		}
	}
		?>

</div>
</body>
</html>