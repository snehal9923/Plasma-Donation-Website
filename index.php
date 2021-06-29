<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate plasma, save the life</h1>
						<p class="text-center">Donate plasma  to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select --</option><optgroup title="-----Maharshtra-----)" label="&raquo; -----Maharshtra-----"></optgroup><optgroup title="Kolhapur" label="&raquo; Kolhapur"></optgroup><option value="Kolhapur" >Kolhapur</option><option value="Kadgaon" >Kadgaon</option><option value="Kagal" >Kagal</option><option value="Kalyanpur" >Kalyanpur</option><option value="Karambali" >Karambali</option><option value="Karvir" >Karvir</option><option value="Ichalkaranji" >Ichalkaranji</option><option value="Jaysingpur" >Jaysingpur</option>


<optgroup title="Pune" label="&raquo;
Pune"></optgroup><option value="Kirkee" >Kirkee</option><option value="Alandi" >Alandi</option><option value="Baramati" >Baramati</option><option value="Bhor" >Bhor</option><option value="Daund" >Daund</option><option value="Indapur" >Indapur</option><option value="Chakan" >Chakan</option>

 <optgroup title="Mumbai Capital" label="&raquo; Mumbai Capital"></optgroup><option value="Mumbai" ></option>
 
 <optgroup title="Nagpur" label="&raquo; Nagpur"></optgroup><option value="Kamptee" >Kamptee</option><option value="Umred" >Umred</option><option value="Ramtek" >Ramtek</option><option value="Bhiwapur" >Bhiwapur</option><option value="Kalameshwar" >Kalameshwar</option><option value="Katol" >Katol</option>

<optgroup title="Nashik" label="&raquo; Nashik"></optgroup><option value="Baglan" >Baglan</option><option value="Chandvad" >Chandvad</option><option value="Deola" >Deola</option><option value="Dindori" >Dindori</option><option value="Igatpuri" >Igatpuri</option><option value="Kalwan" >Kalwan</option>

 <optgroup title="Aurangabad " label="&raquo;Aurangabad"></optgroup><option value="Silod" >Silod</option><option value="Soegaon" >Soegaon</option><option value="Vaijapur" >Vaijapur</option><option value="Gangapur" >Gangapur</option><option value="Paithan" >Paithan</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate plasma</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Bring a life back to power! Donate blood and be the reason of smile to many faces.	</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/vision.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
			This project aims at maintaining all the information pertaining to plasma
donors, different blood groups available in each plasma bank and help them manage in
a better way.

			PlasmaDonation web application will be recognized for saving and improving lives in our community
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/v1.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To develop an Web Application which connects Plasma donors and patients in need
depending on the location of residence of both the parties for faster transport of plasma. 
The
application must be capable of storing the data in a database for easy retrieval across the
area. Most importantly the web app must have an easy to use interface for convenience of all users.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/mission.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>