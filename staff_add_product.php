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

				<h3>Product</h3>

				<div>
					<input class="user-input" type="text" name="t1" class="textbox" placeholder="Product Name">
				</div>
				<div>
					<input class="user-input" type="text" name="t2" class="textbox" placeholder="Price">
				</div>
				<div>
					<input class="user-input" type="text" name="t3" class="textbox" placeholder="Stock">
				</div>
				<div class="contact-but-user">
					<input type="submit" name="b1" value="Add" class="but">
				</div>
			</form>
			<?php
			if (isset($_REQUEST['b1'])) {
				$a = $_REQUEST['t1'];
				$a1 = $_REQUEST['t2'];
				$a2 = $_REQUEST['t3'];
				$sid = $_SESSION['sid'];
				$oid = $_SESSION['oid'];


				$qry = "insert into stock(sid,oid,pname,price,stock) values('$sid','$oid','$a','$a1','$a2')";
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