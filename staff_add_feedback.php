<?php
include('sheader.php');
include('connection.php');
session_start();

// $mname=$_SESSION["ovname"];
?>
<form method="POST">
	<center>
	<table>
	<h2 align="center">Feedback</h2>
	<br>
	<br>
		<tr>
			<td> Feedback</td>
			<td><input type="text" name="t1" class="textbox" placeholder="Feedback"></td>
		</tr>
		
		
		<tr>
			<td><input type="submit" name="b1" value="Submit" class="but"></td>
		</tr>
	</table>
</center>
</form>
<?php
if(isset($_REQUEST['b1']))
{
	$a = $_REQUEST['t1'];
	$oid=$_SESSION['sid'];
	
	$qry = "insert into feedback(sid,feedback) values('$oid','$a')";
	mysqli_query($conn,$qry);
	
	echo "<script>alert('Added Successfully')</script>";
}
?>

<br>
<br>
<br>
<br>
<br>
<br>
<?php
include('common_footer.php');
?>