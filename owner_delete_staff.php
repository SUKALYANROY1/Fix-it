<?php
include("connection.php");
session_start();
$sid=$_REQUEST['id'];
$ret="  delete FROM staff where sid='$sid'";
echo $ret;
					mysqli_query($conn,$ret);
                    header("location:owner_view_staff.php");
				?>