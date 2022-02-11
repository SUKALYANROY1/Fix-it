<?php
include('sheader.php');
include('connection.php');
session_start();
$sid = $_REQUEST['id'];




$ret = " SELECT * FROM stock where stockid=$sid ";
// echo $ret;
$re = mysqli_query($conn, $ret);


$data = mysqli_fetch_assoc($re);

// $mname=$_SESSION["ovname"];
?>
<div class="contact">
	<div class="container">
		<div class="contact-mian">
			<form method="POST">
				<h3>Product</h3>
				<br>
				<br>
				<div>
					<input type="text" name="t1" class="user-input" value="<?php echo $data['pname']; ?>" placeholder="Product Name">
				</div>
				<div>

					<input type="text" name="t2" class="user-input" value="<?php echo $data['price']; ?>" placeholder="Price">
				</div>
				<div>

					<input type="text" name="t3" class="user-input" value="<?php echo $data['stock']; ?>" placeholder="Stock">
				</div>


				<div class="contact-but-user">
					<input type="submit" name="b1" value="Submit" class="but">
				</div>
				</table>
			</form>
			<?php
			if (isset($_REQUEST['b1'])) {
				$a = $_REQUEST['t1'];
				$a1 = $_REQUEST['t2'];
				$a2 = $_REQUEST['t3'];
				// $sid=$_SESSION['sid'];
				// $oid=$_SESSION['oid'];

				// $un = $_REQUEST['email'];
				$query = "update stock set pname = '$a',price='$a1',stock='$a2' where stockid = '$sid'";
				echo $query;
				$result = mysqli_query($conn, $query);
				if ($result === TRUE) {
					echo "<script type = \"text/javascript\">
					alert(\"Successfully Accepted\");
					window.location = (\"owner_view_products.php\")
				</script>";
				}
			}
			?>

		</div>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php
include('common_footer.php');
?>

<?php
// include 'connection.php';

?>