<?php
include("connection.php");
include('oheader.php');
?>


<div class="contact-mian">

  <h3>View Stock</h3>
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
      <th colspan="2">
        Action
      </th>
    </tr>
    <?php
    session_start();
    // $sid=$_REQUEST['sid'];
    $oid = $_SESSION['oid'];
    $ret = " SELECT * FROM stock where oid=$oid ";
    // echo $ret;
    $re = mysqli_query($conn, $ret);

    if ($re) {
      while ($data = mysqli_fetch_assoc($re)) {
        $id = $data['sid'];
        $stockid = $data['stockid'];
        // echo $id;
        $fid = $data['pname'];
        $question = $data['price'];
        $answer = $data['stock'];


    ?>

        <tr>
          <td>
            <?php
            echo $stockid;
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
            <a href="delete_stock.php?id=<?php echo $id; ?>">Delete</a>
          </td>
          <td>
          <a href="owner_update_product.php?id=<?php echo $id; ?>">Update Now</a>
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