<?php
include("connection.php");
include('sheader.php');
?>


<div class="contact-mian">

    <h3>Save Products to Booking</h3>
    <table id="customers">

        <tr>
            <th>
                Sid
            </th>
            <th>
                Product Name
            </th>
            <th>
                Price
            </th>
            <th>
                Stock
            </th>
            <th>
                Enter Quantity
            </th>
          

            <?php
            session_start();
            // $sid=$_REQUEST['sid'];
            $oid = $_SESSION['sid'];
            $ret = " SELECT * FROM stock  ";
            // echo $ret;
            $re = mysqli_query($conn, $ret);

            if ($re) {
                $i=0;
                $o=0;
                while ($data = mysqli_fetch_assoc($re)) {

                    $id = $data['stockid'];
                    // echo $id;
                    $fid = $data['pname'];
                    $question = $data['price'];
                    $answer = $data['stock'];


            ?>
  <form method="POST">
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
                if ($answer<=0)
                {
                    echo "No Stock";
                }
                else{
                    echo $answer;
                }
                ?>
            </td>

          
                <td>
                    <?php
                   
                if ($answer>0)
                {
               
                   echo " <input type='text' name='t1$i'>";
$o++;

                

?>
                
                    <input type="hidden" name="t3<?php echo $i; ?>" value="<?php echo $id; ?>">

                    <input type="hidden" name="t2<?php echo $i; ?>" value="<?php echo $question; ?>">
                    <input type="hidden" name="t4<?php echo $i; ?>" value="<?php echo $fid; ?>">

                    <input type="hidden" name="t5<?php echo $i; ?>" value="<?php echo $answer; ?>">
                    
        <?php
                }
               else
                {
               
                   echo " <input type='hidden' name='t1$i' value='0'>";
$o++;

                

?>
                
                    <input type="hidden" name="t3<?php echo $i; ?>" value="<?php echo $id; ?>">
                    <input type="hidden" name="t4<?php echo $i; ?>" value="<?php echo $fid; ?>">


                    <input type="hidden" name="t2<?php echo $i; ?>" value="<?php echo $question; ?>">
                    <input type="hidden" name="t5<?php echo $i; ?>" value="<?php echo $answer; ?>">
                    
        <?php
                }
        $i=$i+1;
                }
        ?>
        </td>
        </tr>
         </table><input type="submit" name="submit" style="color: white; background-color:#333; height:50px">
        
            </form>
    

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
$count=$i;
// echo $o,"value of iiiiii";
$b=0;
while ($b<$i)
{
    // echo $b,"jsjndsjdkbjdbsdjbjfbdkf";
    $quantity = $_REQUEST['t1'.$b];
    $pname = $_REQUEST['t4'.$b];

    $price = $_REQUEST['t2'.$b];
    $pid = $_REQUEST['t3'.$b];
    $total = $_REQUEST['t5'.$b];
    $mi = $total - $quantity;
    $sid = $_SESSION['sid'];
    $bid = $_SESSION['bookid'];
// echo $mi,"llllllllllllllll";
   
        if ($mi<0) 
        {
            error_reporting(E_ERROR | E_PARSE);
            echo "<script>alert(' $pname No Stock')</script>";
            // header("location:calculatebill.php");   
    }
else{
    $qry = "insert into bill(sid,pid,price,quantity,bookingid) values('$sid','$pid','$price','$quantity','$bid')";
    mysqli_query($conn, $qry);
    $query = "update stock set stock='$mi' where stockid = '$pid'";
    // echo $query;
    $result = mysqli_query($conn, $query);
    // echo "<script>alert('Added Successfully')</script>";
    // header("location:calculatebill.php");
}
$b++;
}
echo "<script>alert('Items Added Successfully')
window.location='calculatebill.php'
</script>";
// header("location:calculatebill.php");
}
?>


<?php
include('common_footer.php');
?>