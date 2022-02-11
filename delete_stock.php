<?php
include("connection.php");
session_start();
$sid=$_REQUEST['id'];
$ret="  delete FROM stock where stockid='$sid'";
echo $ret;
					mysqli_query($conn,$ret);
                    header("location:ohome.html");
				?>