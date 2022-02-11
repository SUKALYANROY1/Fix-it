<?php
include("connection.php");
include('oheader.php');
?>

<style> 
.hello{
        border: 2px black solid;
        background:url(images/lorem-banner.jpg)
}

</style>

<div class="contact-mian">
<div class="hello">
    <br>
  
    <h3>Bill</h3>  
    <center>
    <table >

       
        <?php
        session_start();
        $bid=$_REQUEST['bid'];
        $oid = $_SESSION['oid'];
        // echo $oid;
        $ret = " SELECT * from booking where bid='$bid'";
        // echo $ret;
        $re = mysqli_query($conn, $ret);

        if ($re) {
       $data = mysqli_fetch_assoc($re) ;
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
                    <td>BOOKING ID </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>
                        <?php
                        $total=0;
                        echo $id;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <td>NAME </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>
                        <?php
                        echo $fid;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <td>ADDRESS </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>
                        <?php
                        echo $question;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <td>PHONE NUMBER </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>
                        <?php
                        echo $answer;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <td>COMPLAINT</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>
                        <?php
                        echo $complaint;
                        ?>
                    </td>
                    </tr>
                    <tr>
                   
                    <td>MODEL DETAILS </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td>
                    <td>      <?php
                        echo $modeldetails;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    DATE </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
                        <?php
                        echo $rdate;
                        ?>
                    </td>
                    </tr>
                    <tr>
                    
                    </tr>
    </table> 
    <br>
    <br>
    <br> 

    </center>

            <?php
             } else {
                echo "<script type = \"text/javascript\">
    alert(\"Sorry You Dont Have Any Question.\");
    
    </script>";
            }
         $ret = " SELECT bill.*,stock.* from bill join stock on stock.stockid=bill.pid where bill.bookingid='$bid' and quantity>0";
        //  echo $ret;
         $re = mysqli_query($conn, $ret);
 
        ?>
         <table id="customers">
            <tr>
                <th>
                    PRODUCT NAME
                </th>
                <th>
                   PRICE
                </th>  <th>
                   QUANTITY
                </th>
            </tr>
            <?php
       while( $data = mysqli_fetch_assoc($re)) 
       {

        ?>
       
        <tr>
<td>
        <?php
                        echo $data['pname'];
                        ?>
</td>
<td>
        <?php
                        echo  $data['price'];
                        $price=$data['price'];
                        ?>
</td><td>
        <?php
                        echo  $data['quantity'];
                        $quantity= $data['quantity'];
                        ?>
</td>

        <?php
                        // echo $price*$quantity;
                        $total=$total+($price*$quantity);
                        ?>

      <?php  }
      ?>
        </tr>
        <tr><td>SERVICE CHARGE</td>
        
        <?php 
$appoos="select servicecharge.*,staff.* from servicecharge join staff on servicecharge.staffid=staff.sid where bookingid='$id'";
$re = mysqli_query($conn, $appoos);
 while($data = mysqli_fetch_assoc($re))
 {
        ?>
        <td></td>
        <td>
            <?php 
            $scharge=$data['charge'];
            echo $data['charge'];
            $total=$total+$scharge;
            ?>
       </td>
       <tr>
        
       <td>STAFF</td>
       <td></td>
       <td> <?php echo $data['sname'];?></td>
       </tr>
   <?php }
   ?>
   </tr>
        <tr><td>GRAND TOTAL</td><td></td><td><h1><?php echo $total."/-RS"; ?> </td></h1></tr>
         
          
    </table>
</div>
</div>
</br>
<button style="margin: 0px 50px 0px 48%" onclick="window.print()">PRINT</button>
</br>
 </br>
<?php

       
?>


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