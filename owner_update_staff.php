<?php
include("connection.php");
include('oheader.php');
?>

<?php
session_start();
$sid = $_REQUEST['id'];
$ret = " SELECT * FROM staff where sid=$sid ";
// echo $ret;
$re = mysqli_query($conn, $ret);

if ($re) {
	while ($data = mysqli_fetch_assoc($re)) {
		$id = $data['sid'];
		// echo $id;
		$fid = $data['sname'];
		$question = $data['email'];
		$answer = $data['phno'];

		$sid = $data["address"];
?>
		<center>
			
<div class="contact">
	<div class="container">
		<div class="contact-mian">
		<h3>Update Staff</h3>
			<form action="#" method="post">

				<!-- <div class="form-group"> -->
				<input type="text" name="t1"  class="user-input" value=" <?php echo $id; ?>" required="" readonly>
				<!-- </div> --></br>
				<!-- <!-- <div class="form-group"> -->
				<input type="text" name="t2"  class="user-input" value="<?php echo $fid; ?>" required="">
				<!-- </div> --></br>
				<!-- <div class="form-group"> -->
				<input type="text" name="t3"  class="user-input" value="<?php echo $question; ?>" required="" readonly>
				<!-- </div> --></br>
				<!-- <div class="form-group"> -->
				<input type="text" name="t4"  class="user-input" value="<?php echo $answer; ?>" required="" placeholder="enter your answer here">
				<!-- </div> --></br>
				<!-- <div class="form-group"> -->
				<input type="hidden" name="t5"  class="user-input" value="<?php echo "$id" ?>" required="">
				<!-- </div> --></br>

				<div class="contact-but-user">

				<input type="submit" name="submit" value="Submit">
				</div>
				</div>
				</div>
				</div>
			</form>
		</center>
		</br>
		</br>
<?php
	}
} else {
	echo "<script type = \"text/javascript\">
alert(\"Sorry You Dont Have Any Question.\");
window.location = (\"specialist_home.html\")
</script>";
}
?>
</div>

<?php
if (isset($_REQUEST['submit'])) {
	$id = $_REQUEST['t1'];
	$fid = $_REQUEST['t2'];
	$question = $_REQUEST['t3'];
	$answer = $_REQUEST['t4'];
	$t5 = $_REQUEST['t5'];

	//  $sid=$_SESSION['ovname'];
	//  echo "$id, $fid, $question, $answer";
	$m = "update staff set sname='$fid',email='$question',address='$t5',phno='$answer' where sid='$id'";
	$f = mysqli_query($conn, $m);
	echo "<script type=\"text/javascript\">
	 alert(\"SUCCESSFULLY EDITED \");
	 window.location = (\"owner_view_staff.php\")
	 </script>";
}
?>


<?php
include('common_footer.php');
?>