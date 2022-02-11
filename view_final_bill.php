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
				<div>
					<h3>Bill</h3>
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
					<div>
						<input type="text" name="t2" class="user-input" placeholder="Service Charge">
					</div>

					<div class="contact-but-user">
						<input type="submit" name="b1" value="Submit" class="but">
					</div>
				</div>
			</form>
			<?php
			if (isset($_REQUEST['b1'])) {

				$a = $_REQUEST['t1'];
				$b = $_REQUEST['t2'];
				$oid = $_SESSION['sid'];
				$total = $b;

				$asd="insert into servicecharge(staffid,bookingid,charge) values('$oid','$a','$b')";
				mysqli_query($conn, $asd);

				$ret = " SELECT * FROM bill where bookingid=$a and sid='$oid' ";
				// echo $ret;
				$re = mysqli_query($conn, $ret);

				while ($data = mysqli_fetch_assoc($re)) {

					$total = $total + $data['price']*$data['quantity'];
				}
				
			?>
                </br>			
				<div>
					<h2 style="color: #505866;">Grand Total=<span class="contact-mian-head"><?php echo $total ?></span></h2>
				</div>
			<?php

			}
			?>

		</div>
	</div>
</div>
		</br>

<?php
include('common_footer.php');
?>