<?php
include("connection.php");
include('oheader.php');
?>

<div class="contact-mian">

    <h3>All Bookings</h3>
    <table id="customers">

        <tr>
            <th>
                Id
            </th>
            <th>
                User Name
            </th>
            <th>
                Address
            </th>
            <th>
                Phone No
            </th>
            <th>
                Complaint
            </th>
            <th>
                Model Details
            </th>
            <th>
                Date
            </th>
            <th>
                View Bill
            </th>
        </tr>

        <?php
        session_start();
        // $sid=$_REQUEST['sid'];
        $oid = $_SESSION['oid'];
        $ret = " SELECT * FROM booking where oid=$oid";
        // echo $ret;
        $re = mysqli_query($conn, $ret);

        if ($re) {
            while ($data = mysqli_fetch_assoc($re)) {
                $id = $data['bid'];
                // echo $id;
                $fid = $data['uname'];
                $question = $data['address'];
                $answer = $data['phno'];
                $complaint = $data['complaint'];
                $modeldetails = $data['modeldetails'];
                $rdate = $data['rdate'];
                $status = $data['status'];

        ?>

                <tr>
                    <td>
                        <?php
                        echo $id;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $fid;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $question;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $answer;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $complaint;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $modeldetails;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rdate;
                        ?>
                    </td>
                    <td>
                    
                        <a href="ownerviewbill.php?bid=<?php echo $id ?>">View Bill</a>
                     <?php 
                       
                       ?>
                    </td>



                </tr>
            <?php
            }
            ?>
    </table>
</div>
</br>
</br>
<?php


        } else {
            echo "<script type = \"text/javascript\">
alert(\"Sorry You Dont Have Any Question.\");

</script>";
        }
?>
</div>

<?php
if (isset($_REQUEST['submit'])) {
    $id = $_REQUEST['t1'];
    $fid = $_REQUEST['t2'];
    $question = $_REQUEST['t3'];
    $answer = $_REQUEST['t4'];
    $t5 = $_REQUEST['t5'];

    // $sid=$_SESSION['ovname'];
    // echo "$id, $fid, $question, $answer";
    $m = "update staff set sname='$fid',email='$question',address='$t5',phno='$answer' where sid='$id'";
    $f = mysqli_query($conn, $m);
    echo "<script type=\"text/javascript\">
	 alert(\"SUCCESSFULLY EDITED \");
	 
	 </script>";
}
?>


<?php
include('common_footer.php');
?>