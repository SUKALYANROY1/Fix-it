<?php

include("connection.php");
include("aheader.html");
?>
<style>
    input[type=button],
    input[type=submit] {
        background-color: #62529c;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
<!-- contact -->

<form method="POST">

    <div class="contact">
        <div class="container">
            <div class="contact-mian">
                <h3>Add Owner</h3>
                <div class="">
                    <!-- <div class="contact-top"> -->
                    <input class="user-input" type="text" name="name" pattern="[A-Z a-z]+" required="" pattern="[A-Za-z]+" placeholder="Name" required=""><br>

                    <!-- <div class="form-group"> -->
                    <input class="user-input" type="text" name="address" placeholder="Address" required=""><br>
                    <!-- </div>
                        <div class="form-group"> -->
                    <input class="user-input" style="padding: 15px 15px;" type="email" name="email" placeholder="Email Id" required=""><br>
                    <!-- </div>
						<div class="form-group"> -->
                    <input class="user-input" type="text" name="phone" pattern="[0-9]{10}" maxlength="12" placeholder="Phone No" required=""><br>
                    <!-- </div>
						
                        <div class="form-group"> -->

                    <select name="district">
                        <option>Select Your District</option>
                        <option value="idukki">Idukki</option>
                        <option value="kottayam">Kottayam</option>
                        <option value="Ernakulam">Ernakulam</option>
                        <option value="Kannur">Kannur</option>
                        <option value="Kasargod">Kasargod</option>
                        <option value="kollam">Kollam</option>
                        <option value="Wayanad">Wayanad</option>
                        <option value="Malappuram">Malappuram</option>
                        <option value="Kozhikkode">Kozhikode</option>
                        <option value="Pathanamthitta">Pathanamthitta</option>
                        <option value="palakkadu">Palakkadu</option>
                        <option value="Thiruvanandhapuram">Thiruvanathapuram</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Thrissur">Thrissur</option>

                    </select>
                    <br>
                    <!-- </div>
						<div class="form-group"> -->
                    <input class="user-input" style="padding: 15px 15px;" type="number" name="lno" placeholder="Licence Number" required="">
                    <br>
                    <!-- </div>
                        <div class="form-group"> -->
                    <input class="user-input" style="padding: 15px 15px;" type="password" name="password" placeholder="Password" required="" id="password">
                    <div >
                    <input type="checkbox" onclick="myFunction()"> Show Password 
                    </div>
                    <br>

                    <div class="contact-but-user">
                        <input type="submit" name="submit" value="Register">
                    </div>


                </div>
            </div>

        </div>
    </div>
</form>

<?php

if (isset($_REQUEST["submit"])) {

    $Name = $_REQUEST["name"];

    $Address = $_REQUEST["address"];
    $email = $_REQUEST["email"];
    // echo $email;

    $phone = $_REQUEST["phone"];
    // echo $phone;

    $district = $_REQUEST["district"];
    $lno = $_REQUEST["lno"];
    $password = $_REQUEST["password"];
    $a = "insert into owner(oname,address,district,email,phno,licenceno,status) values('$Name','$Address','$district','$email','$phone','$lno','approved')";
    mysqli_query($conn, $a);
    // echo $a;

    $qry1 = "insert into login(username,password,usertype,status) values('$email','$password','owner','approved')";

    mysqli_query($conn, $qry1);
    echo "<script>alert('Registration Completed Successfully')</script>";
}
include("footer.html");
?>