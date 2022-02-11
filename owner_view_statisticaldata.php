<?php
include("connection.php");
include('oheader.php');
session_start();
$oid = $_SESSION['oid'];
$grandtotal=0;
?>
<center>
<form method="post">
<input class="user-input" style="width: 50%;" type="text" name="t1" placeholder="Type year or name of months to find analysis">
<input class="user-input" type="submit" name="submit">
</form>
</center><br>
<div class="contact-mian">

    <h3> Analysis</h3>
    <table id="customers">
        <?php
 
        // $sid=$_REQUEST['sid'];
     
        // echo $oid;

        if (isset($_REQUEST['submit'])){
            $search=$_REQUEST['t1'];
            echo $search;
            $ret = " SELECT * FROM booking where oid=$oid and (monthname(`rdate`)='$search' or rdate='$search') ";

            // echo $ret;
        }
        else{
        $ret = " SELECT * FROM booking where oid=$oid  ";
        // echo $ret;
        }
        $re = mysqli_query($conn, $ret);

        if ($re) {
            ?>
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
            <th>
               Amount
            </th>
        </tr>
        <?php
      
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
                    <td>
                        <?php

                        $ret = " SELECT * FROM servicecharge where bookingid=$id ";
                        // echo $ret;
                        $re = mysqli_query($conn, $ret);
                        $data = mysqli_fetch_assoc($re);
                        $total=$data['charge'];
        
                        

                      $ret = " SELECT * FROM bill where bookingid=$id ";
                      // echo $ret;
                      $re = mysqli_query($conn, $ret);
      
                      while ($data = mysqli_fetch_assoc($re)) {
      
                          $total = $total + $data['price']*$data['quantity'];
                      }
                      echo $total;
                      $grandtotal=$grandtotal+$total;
                        ?>
                        
                    </td>



                </tr>
<tr>
    <td>
        GRAND TOTAL
    </td>
    <td>
        
    <?php
echo $grandtotal;
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




<?php
include('common_footer.php');
?>