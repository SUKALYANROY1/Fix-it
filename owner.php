
<?php
include("connection.php")
?>


	<!-- contact -->

					<h4 class="font-italic mb-4">Registration Form</h4>
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" name="name" required="" pattern="[A-Z a-z]+" class="form-control" placeholder="Name" required="">
						</div>
						<div class="form-group">
							<input type="text" name="address" class="form-control" placeholder="Address" required="">
                        </div>
                        <div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email Id" required="">
                        </div>
						<div class="form-group">
							<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" maxlength="10" minlength="10" class="form-control" placeholder="Phone Number" required="">
                        </div>
                        <div class="form-group">
						<div class="form-group">
							<input type="number" name="licenceno" class="form-control" placeholder="licenceno" required="">
						</div>
                        <select name="district" style="border: 1px solid #ccc;
                    font-size: 1em;
                    color: #828282;
                    background: none;
                    width: 100%;
                    font-weight: 600;
                    letter-spacing: 1px;
                    padding: 15px 20px;
                    outline: none;">
                            <option  selected="" disabled="">Select Your District</option>
                            <option >Idukki</option>
                            <option >Kottayam</option>
                            <option >Ernakulam</option>
                            <option >Kannur</option>
                            <option >Kasargod</option>
                            <option >Kollam</option>
                            <option >Wayanad</option>
                            <option >Malappuram</option>
                            <option >Kozhikode</option>
                            <option >Pathanamthitta</option>
                            <option >Palakkadu</option>
                            <option >Thiruvanathapuram</option>
                            <option >Alappuzha</option>
                            <option >Thrissur</option>

                        </select>

						</div>
						<div class="form-group">
                        <!-- <input type="text" name="accountno" class="form-control" placeholder="Account Number" required="">  
                        </div>
                        <div class="form-group">
                        <input type="text" name="bank" class="form-control" placeholder="Bank Name" required="">  
                        </div>
                        <div class="form-group">
                        <input type="text" name="ifsccode" class="form-control" placeholder="IFSC code" required="">  
						</div> -->
                        <div class="form-group">
                        <input type="text" name="password" class="form-control" placeholder="password.." required="">  
						</div>
						<input type="submit" name="submit" value="Submit">
					</form>
				</div>
			
			
	
</body>
<?php

if(isset($_REQUEST["submit"]))
{
	echo "hello";
    $Name=$_REQUEST["name"];
    
    $Address=$_REQUEST["address"];
    $email=$_REQUEST["email"];
	$phone=$_REQUEST["phone"];
    $district=$_REQUEST["district"];
    $licenceno=$_REQUEST["licenceno"];
$password=$_REQUEST["password"];
  
	
	$a="insert into owner(oname,address,district,email,phno,licenceno,status) values('$Name','$Address','$email','$phone','$district','$licenceno','approved')";
    mysqli_query($conn,$a);
	echo "$a";
	$qry1 = "insert into login(username,password,usertype,status) values('$email','$password','owner','status')";
	echo $a;
	mysqli_query($conn,$qry1);
	echo $qry1;
	echo "<script>alert('Registration Completed Successfully')</script>";
}
?>

</html>