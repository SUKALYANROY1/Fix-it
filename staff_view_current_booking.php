<?php
include("connection.php");
include('sheader.php');
?>

<div class="contact-mian">

    <h3>Todays Bookings</h3>
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
                Status
            </th>
        </tr>
        <?php
        session_start();
        // $sid=$_REQUEST['sid'];
        $oid = $_SESSION['sid'];
        $date = date('Y-m-d');
        $ret = " SELECT * FROM booking where sid=$oid  and rdate='$date' ";
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
                        <?php
                        echo $status;
                        ?>
                    </td>
                  
                <?php
            }
                ?>

                </tr>
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