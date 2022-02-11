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
				<h3>Booking</h3>

				<div>
					<input class="user-input" type="text" name="uname" pattern="[A-Z a-z]+" class="textbox" placeholder="Mobile Owner Name">
				</div>
				<div>
					<textarea class="user-input" name="address" placeholder="Address" style="width: 100%;"></textarea>
				</div>
				<div>
					<input class="user-input" type="text" pattern="[0-9]{10}" maxlength="12" name="phno" class="textbox" placeholder="Phone No">
				</div>
				<div>
					<textarea class="user-input" name="complaint" placeholder="Complaint" style="width: 100%;"></textarea>
				</div>

				<div>
					<textarea class="user-input" name="modeldetails" placeholder="Model Details" style="width: 100%;" ></textarea>
				</div>
				<div>
					<label for="rdate">Return Date</label>
					<input class="user-input" type="date" name="rdate" class="textbox" id="rdate">
				</div>
				<div class="contact-but-user">
					<input type="submit" name="b1" value="Submit" class="but">
				</div>

			</form>
			<?php
			if (isset($_REQUEST['b1'])) {
				$sid = $_SESSION['sid'];
				$oid = $_SESSION['oid'];
				$uname = $_REQUEST['uname'];
				$address = $_REQUEST['address'];
				$phno = $_REQUEST['phno'];
				$complaint = $_REQUEST['complaint'];
				$modeldetails = $_REQUEST['modeldetails'];
				$rdate = $_REQUEST['rdate'];


				$qry = "insert into booking(sid,oid,uname,address,phno,complaint,modeldetails,rdate,status) values('$sid','$oid','$uname','$address','$phno','$complaint','$modeldetails','$rdate','Not Completed')";
				// echo $qry;
				mysqli_query($conn, $qry);

				echo "<script>alert('Added Successfully')</script>";
			}
			?>
		</div>
	</div>
</div>
<?php
include('common_footer.php');
?>
