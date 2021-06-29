<?php 
	
	include 'include/header.php';

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

	if(isset($_POST['submit'])){
	
			//INPUT NAME CHECK
			if(isset($_POST['name']) && !empty($_POST['name'])){
					if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
					$name = $_POST['name'];
					}else{
						$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Only lower and upper case and space characters are allowed!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					  </div>';
						 }
					}
					else{
						$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please fill the name field.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						  </div>';
						}
			
			
					// GENDER INPUT CHECK
						if(isset($_POST['gender']) && !empty($_POST['gender'])){
						$gender = $_POST['gender'];
					}
					else{
						$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please select your gender</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					  </div>';
					}
	
	
					//DAY INPUT CHECK
					if(isset($_POST['day']) && !empty($_POST['day'])){
						$day = $_POST['day'];
					}
					else{
						$dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please select date!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					  </div>';
					}
	
					
					//MONTH INPUT CHECK
					if(isset($_POST['month']) && !empty($_POST['month'])){
						$month = $_POST['month'];
					}
					else{
						$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please select Month input!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					  </div>';
					}
	
					
					//YEAR INPUT CHECK
					if(isset($_POST['year']) && !empty($_POST['year'])){
						$year = $_POST['year'];
					}
					else{
						$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please select date!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					  </div>';
					}
	
	
					//BLOOD_GROUP INPUT CHECK
					if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
						$blood_group = $_POST['blood_group'];
					}
					else{
						$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please select blood_group!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						  </div>';
					}
	
			
					
					//CITY INPUT CHECK
					if(isset($_POST['city']) && !empty($_POST['city'])){
						if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
								$city = $_POST['city'];
						}else{
							$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Only lower and upper case and space characters are allowed!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
							</div>';
						}
				}
				else{
					$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please fill the city field.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
				}
	
	
	
				//CONTACT_NUM INPUT CHECK
				if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
					if(preg_match('/\d{10}/', $_POST['contact_no'])){
							$contact = $_POST['contact_no'];
					}else{
						$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Contact should consist of 10 characters only!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
					}
			} 
			else{
				$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill the Contact number.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		
		
				//EMAIL INPUT CHECK
				if(isset($_POST['email']) && !empty($_POST['email'])){
	
			$pattern= '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if(preg_match($pattern,$_POST['email'])){
	
				$check_email = $_POST['email'];

				$sql = "SELECT email FROM donor WHERE email= '$check_email' ";

				$result = mysqli_query($connection, $sql);
	
				if(mysqli_num_rows($result)>0){
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Sorry! This email already exists.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					</div>';
				}else{
					$email=$_POST['email'];
				}
				
				}else{
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please enter valid email address</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					</div>';
					}
				}else{
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please fill the email field.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
					</button>
					  </div>';
					}
	
				//INSERT DATA INTO DATABASE
	
					if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact) && isset($city)){
					
					
	
					$DonorDOB = $year."-".$month."-".$day;
	
					

					$sql = "UPDATE donor SET name= '$name',gender='$gender' ,email = '$email' ,city= '$city' ,dob='$DonorDOB',contact_no = '$contact',blood_group='$blood_group' WHERE id = ".$_SESSION['user_id'];
					
	
					if(mysqli_query($connection,$sql))
					{
						$updateSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data updated successfully! Try again</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						   <span aria-hidden="true">&times;</span>
						</button>
						  </div>';
				
					?>
					
					
					 <script>
					 function myFunction(){
						 location.reload();
					 }
					 </script>

					 <?php
					}else{
						$updateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data failed to update! Try again</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
					</button>
					  </div>';
					}
				}

			} // END OF SUBMIT IF


			$sql = "SELECT * FROM donor WHERE id=".$_SESSION['user_id'];
			$result = mysqli_query($connection,$sql);
			
			if( mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
				$userID = $row['id'];
				$blood_group = $row['blood_group'];
				$gender = $row['gender'];
				$email = $row['email'];
				$contact = $row['contact_no'];
				$city = $row['city'];
		
				$dob = $row['dob'];
		
				$date = explode("-", $dob);
		
				$dbPassword = $row['password'];
				
				}
			}
		


		if(isset($_POST['update_pass'])){

			//PASSWORD INPUT CHECK
		if(isset($_POST['old_password']) && !empty($_POST['old_password'])  && isset($_POST['new_password']) && !empty($_POST['new_password'])){

			$oldpassword = md5($_POST['old_password']);
			if($oldpassword== $dbPassword){

				if(strlen($_POST['new_password'])>=6){

					if($_POST['new_password'] == $_POST['c_password']){
						$password = md5($_POST['new_password']);
					}else{
						$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>New passwords are not same!.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
					}
			}
	else{

		$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>The password should consist of 6 characters atleast!.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
	}
}else{
	$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please enter valid password.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
}
	

			}else{
		$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please fill password field</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
	}
if(isset($password)){
	$sql = "UPDATE donor SET password='$password' WHERE id='$userID' ";

	if(mysqli_query($connection,$sql)){

		$updatePasswordSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Password updated successfully!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		</button>
		  </div>';

	?>
		<script>
		function myFunction(){
			location.reload();
		}
		</script>
    <?php

	}else{
		$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Data failed to insert! Try again</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		</button>
		  </div>';
		}
}


}

if(isset($_POST['delete_account'])){



	if(isset($_POST['account_password']) && !empty($_POST['account_password'])){
		$account_password = md5($_POST['account_password']);

		if($account_password == $dbPassword)
		{

			$showForm = '
			 <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Are you sure you want to delete your account?</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="delId" value="'.$_SESSION['user_id']. ' ">
			<button type="submit" name="delete" class="btn btn-danger">Yes</button>

			<button type="button" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true"> No! Not yet </span>
			</button>      
		</form>
 </div>
 		';

		}else{	$deleteAccountError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please Enter valid password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			</button>
			  </div>';

		}
		

	}else{

		$deleteAccountError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Enter your password</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		</button>
		  </div>';

	}
}

if(isset($_POST['userID'])){

	$userID = $_POST['userID'];

	$sql = "DELETE FROM *donor WHERE id=".$userID;

	if(mysqli_query($connection,$sql)){
	header("Location: logout.php");
    

	}else{
		$deletesubmitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Account Not deleted!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		</button>
		  </div>';
		}

	}

if(isset($_POST['userID'])){

}

	include 'include/sidebar.php';
?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
					<?php 
					if(isset($showForm)) echo $showForm;
					if(isset($deletesubmitError)) echo $deletesubmitError;
					if(isset($updateError)) echo $updateError; 
				    if(isset($updateSuccess)) echo $updateSuccess; ?>	
					
						
				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name; ?> " >

						<?php if(isset($nameError)) echo $nameError; ?>	
					</div><!--full name-->



					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if(isset($gender)) echo '<option selected="" value="'.$blood_group.'"</option>';?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>

            </div><!--End form-group-->
			<?php if(isset($blood_groupError)) echo $blood_groupError; ?>			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"<?php if(isset($gender)){ if($gender == "Female") echo "checked";} ?> >

									  <?php if(isset($genderError)) echo $genderError; ?>	

				    </div><!--gender-->
					
				    
					
					<div class="form-inline">
              
			  <label for="name">Date of Birth</label><br>
			  <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>	 
			  <option value="">---Date---</option>
              
			  <?php if(isset($date['2'])) echo '<option selected="" value="'.$date['2'].'">'.$date['2'].'</option>'; ?><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option>
			  <option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>

              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>

				<?php if(isset($date['1'])) echo '<option selected="" value="'.$date['1'].'">'.$date['1'].'</option>';?>

                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>

				<?php if(isset($date['0'])) echo '<option selected="" value="'.$date['0'].'">'.$date['0'].'</option>'; ?>

                <option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option><option value="2002" >2002</option><option value="2003" >2003</option><option value="2004" >2004</option><option value="2005" >2005</option>
              </select>
            
			  <?php if(isset($dayError)) echo $dayError; ?>	
			<?php if(isset($monthError)) echo $monthError; ?>	
			<?php if(isset($yearError)) echo $yearError; ?>	
			
			</div><!--End form-group-->
			
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email; ?> " >

						<?php if(isset($emailError)) echo $emailError; ?>	

					</div>



					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="11" value="<?php if(isset($contact)) echo $contact; ?> ">

			  <?php if(isset($contactError)) echo $contactError; ?>

            </div><!--End form-group-->
				
				
				
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
			  <option value="">-- Select --</option><optgroup title="-----Maharshtra-----)" label="&raquo; -----Maharshtra-----"></optgroup><optgroup title="Kolhapur" label="&raquo; Kolhapur"></optgroup><option value="Kolhapur" >Kolhapur</option><option value="Kadgaon" >Kadgaon</option><option value="Kagal" >Kagal</option><option value="Kalyanpur" >Kalyanpur</option><option value="Karambali" >Karambali</option><option value="Karvir" >Karvir</option><option value="Ichalkaranji" >Ichalkaranji</option><option value="Jaysingpur" >Jaysingpur</option>


<optgroup title="Pune" label="&raquo;
Pune"></optgroup><option value="Kirkee" >Kirkee</option><option value="Alandi" >Alandi</option><option value="Baramati" >Baramati</option><option value="Bhor" >Bhor</option><option value="Daund" >Daund</option><option value="Indapur" >Indapur</option><option value="Chakan" >Chakan</option>

 <optgroup title="Mumbai Capital" label="&raquo; Mumbai Capital"></optgroup><option value="Mumbai" ></option>
 
 <optgroup title="Nagpur" label="&raquo; Nagpur"></optgroup><option value="Kamptee" >Kamptee</option><option value="Umred" >Umred</option><option value="Ramtek" >Ramtek</option><option value="Bhiwapur" >Bhiwapur</option><option value="Kalameshwar" >Kalameshwar</option><option value="Katol" >Katol</option>

<optgroup title="Nashik" label="&raquo; Nashik"></optgroup><option value="Baglan" >Baglan</option><option value="Chandvad" >Chandvad</option><option value="Deola" >Deola</option><option value="Dindori" >Dindori</option><option value="Igatpuri" >Igatpuri</option><option value="Kalwan" >Kalwan</option>

 <optgroup title="Aurangabad " label="&raquo;Aurangabad"></optgroup><option value="Silod" >Silod</option><option value="Soegaon" >Soegaon</option><option value="Vaijapur" >Vaijapur</option><option value="Gangapur" >Gangapur</option><option value="Paithan" >Paithan</option></select>

	<?php if(isset($cityError)) echo $cityError; ?>	

            </div><!--city end-->
			
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div>
				</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
						<?php if(isset($passwordError)) echo $passwordError;	?>
						
						<?php if(isset($updatePasswordSuccess)) echo $updatePasswordSuccess; 
					
						
						?>

							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
	
					
					<!-- Display Message -->

					<?php if(isset($deleteAccountError)) echo $deleteAccountError; 
					 ?>

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
}else{
	header("Location: ../index.php");
}

include 'include/footer.php'; 
 ?>