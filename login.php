<?php
include('connection.php');
include('cheader.php');
session_start();
?>
<!-- banner 2 -->

<!-- //banner 2 -->
<!-- page details -->

</div>
<!-- //page details -->

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="contact-mian">
			<h3><b>Login Here</b></h3>

			<div class="contact-top">
				<form action="#" method="post" >
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" required="">
					</div>
					<div class="form-group" style="padding: 0 28px 0 19px; text-align: center;">
						<input type="password" style="padding: 15px 15px;" name="password" placeholder="Password" required="" id="password">
						<br><input type="checkbox" onclick="myFunction()"> Show Password
					</div>

					<div class="contact-but-user">
						<input type="submit" value="Login" name="submit">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- map -->

<!-- //map -->
<!-- //contact -->

<!-- footer -->

</body>
<?php
if (isset($_REQUEST["submit"])) {
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	$qry = "select usertype,status from login where username='$username' and password='$password'";
	$res = mysqli_query($conn, $qry);
	$rs = mysqli_fetch_assoc($res);
	$da = $rs["usertype"];
	$das = $rs["status"];
	echo $da;
	echo $das;

	if ($da == "admin") {
		header("location:adminhome.html");
	} elseif ($da == "owner") {

		$_SESSION["oemail"] = $username;

		$ret = " SELECT * FROM owner where email='$username' ";
		echo $ret;
		$re = mysqli_query($conn, $ret);

		while ($data = mysqli_fetch_assoc($re)) {
			$id = $data['oid'];
			echo $id;

			$_SESSION["oid"] = $id;
		}



		header("location:ohome.html");
	} else if ($da == "staff") {
		// session_start();
		$_SESSION["ovname"] = $username;
		$ret = " SELECT * FROM staff where email='$username'";
		echo $ret;
		$re = mysqli_query($conn, $ret);

		$data = mysqli_fetch_assoc($re);

		$id = $data['oid'];
		$sid = $data['sid'];
		$sname = $data['sname'];


		echo "helloooooooooo";
		echo $id;
		echo $sid;
		$_SESSION["oid"] = $id;
		$_SESSION["sid"] = $sid;
		$_SESSION["sname"] = $sname;
		$_SESSION["cat"] = 'Staff';


		header("location:shome.html");
	} else {
		echo "<script>
	 alert(\"INVALID USERNAME OR PASSWORD \");
	 </script>";
	}
}
?>


<?php

include("footer.html")

?>

</html>