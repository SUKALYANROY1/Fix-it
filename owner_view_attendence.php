<?php
include('connection.php');
include('oheader.php');
session_start();
?>

<div class="contact-mian">

  <h3>Attendence</h3>
  <table id="customers">

    <tr>

      <th>Id</th>
      <th>StaffName</th>

      <th>Date</th>
      <th>Attendence</th>


    </tr>
    <?php
    $oid = $_SESSION["oid"];
    $b = "SELECT attendence.*,staff.* FROM attendence join staff on attendence.sid=staff.sid where attendence.oid='$oid'";

    $res = mysqli_query($conn, $b);
    while ($data = mysqli_fetch_assoc($res)) {

      $na = $data['aid'];
      $fon = $data['sname'];
      $fon1 = $data['date'];
      $fon2 = $data['status'];

      echo "
                <tr>
                    
                    <td>$na</td>
                    <td>$fon</td>
                    <td>$fon1</td>
                    <td>$fon2</td>
					
                </tr>";
    }
    ?>






  </table>
</div>
  <br>
  <br>
  <br>
  <?php

  include('footer.html');
  ?>