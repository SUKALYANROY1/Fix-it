<?php
include('sheader.php');
include('connection.php');
session_start();

// $mname=$_SESSION["ovname"];
?>
<form method="post">
	<center>
	<table>
	<h2 align="center"></h2>
	<br>
	<br>
		<tr>
			<td> </td>
			<!-- <td><input type="text" name="t1" class="textbox" placeholder="Feedback"></td> -->
		</tr>
		
		
		<tr>
			<td><input type="submit" name="b1" value="Submit" class="but"></td>
		</tr>
	</table>
</center>
</form>
<?php

	// $a = $_REQUEST['t1'];
	$sid=$_REQUEST['id'];
	$oid=$_SESSION['oid'];

	$date=date('y-m-d');
	$b = "select count(*) as cnt from attendence where sid='$sid' and oid='$oid' and date='$date'";
// echo $b;
    $res = mysqli_query($conn, $b);
   $data1 = mysqli_fetch_assoc($res);
//    echo $data1['cnt'];
   if ($data1['cnt']<=0)
    {

	$qry = "insert into attendence(sid,oid,date,status) values('$sid','$oid','$date','present')";
	mysqli_query($conn,$qry);
	
	echo "<script>alert('Attendence Marked Successfully'); window.location.href='owner_view_staff.php';</script>";
	
	}
	else{
		echo "<script>alert('Already Marked '); window.location.href='owner_view_staff.php';</script>";

	}
	// header("location:owner_view_staff.php");
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