<?php
include("connection.php");
include('oheader.php');
?>

<div class="contact-mian">

  <h3>Staff</h3>
  <table id="customers">

    <tr>
      <th>
        Sid
      </th>
      <th>
        Name
      </th>
      <th>
        Email
      </th>
      <th>
        Phone No
      </th>
      <th>
      Address
      </th>
      <th>
        Update
      </th>
      <th>
        Delete
      </th>
      <th>
        Mark Attendence
      </th>
      <th>
        <a href="owner_view_attendence.php">View Attendence</a>
      </th>
    </tr>
    <?php
    session_start();
    // $sid=$_REQUEST['sid'];
    $oid = $_SESSION['oid'];
    $ret = " SELECT * FROM staff where oid=$oid ";
    // echo $ret;
    $re = mysqli_query($conn, $ret);

    while ($data = mysqli_fetch_assoc($re)) {
      $id = $data['sid'];
      // echo $id;
      $fid = $data['sname'];
      $question = $data['email'];
      $answer = $data['phno'];

      $sid = $data['address'];
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
          echo $sid;
          ?>
        </td>
        <td>
          <a href="owner_update_staff.php?id=<?php echo $id; ?>">Update</a>
          <?php

          ?>
        </td>
        <td>
          <a href="owner_delete_staff.php?id=<?php echo $id; ?>">Delete</a>
          <?php

          ?>
        </td>
        <td>
<?php
$date=date('y-m-d');
 $ret = " SELECT * FROM attendence where sid=$id and `date`='$date'";
//  echo $ret;
 $re = mysqli_query($conn, $ret);

$data1 = mysqli_fetch_assoc($re)
?>
<?php 
if ($data1)
{
  echo "Present ✔";
}
else{?>
          <a href="staff_add_attendence.php?id=<?php echo $id; ?>">Attendence </a>
          <?php
}
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