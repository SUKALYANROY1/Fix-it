<?php
include('sheader.php');
include('connection.php');
session_start();

// $mname=$_SESSION["ovname"];
?>
<div class="contact">
	<div class="container">
		<div class="contact-mian">
			<form method="POST">
				<table>
					<h3>Select Booking ID</h3>
					<div>
					<label>Select Booking</label>		
					<select name="t1">
<?php 
$t="select bid,uname from booking ";
$row=mysqli_query($conn,$t);
while($data=mysqli_fetch_array($row))
{
	echo "<option value='$data[bid]'>$data[bid]	-$data[uname]</option> ";
}

?>
					</select>
					</div>


					<div class="contact-but-user">
						<input type="submit" name="b1" value="Submit" class="but">
					</div>
				</table>
			</form>
			<?php
			if (isset($_REQUEST['b1'])) {
				$a = $_REQUEST['t1'];
				$_SESSION['bookid'] = $a;



				echo "<script>alert('Added Successfully')</script>";
				header("location:calculatebill.php");
			}
			?>
		</div>
	</div>
</div>
<?php
include('common_footer.php');
?>