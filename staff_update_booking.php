<?php
	include 'connection.php';
	$sid = $_REQUEST['id'];
	// $un = $_REQUEST['email'];
	$query = "update booking set status = 'completed' where bid = '$sid'";
    echo $query;
	$result = mysqli_query($conn,$query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Accepted\");
					window.location = (\"staff_view_booking.php\")
				</script>";
	}
?>