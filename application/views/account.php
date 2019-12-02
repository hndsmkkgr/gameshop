<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Account</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/account.css">
<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/account_responsive.css">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include 'header.php' ?>

	<!-- Menu -->

	
	<!-- Home -->

	<br><br><br><br><br><br><br><br><br>

	<!-- Account Information -->
	
	<div class="account">
		<div class="container">
			<div class="row">

				<!-- Profile -->

				<div class="col-lg-4">
					<div class="profile account_section">
						<div class="section_title_profile">PROFILE</div>
						
						<div class="profile_list_container">
							<ul class="profile_list">
								<li>
									<div class="profile_list_title">AVATAR</div>
									<img src="assets/images/product_5.jpg" alt="avatar" class="avatar_picture"> 
								</li>
								<li>
									<div class="profile_list_title">USERNAME</div>
									<div>
									<!-- Birthdate -->
									<input type="text" id="username" class="profile_input" value="xtheprofessorx" disabled>
									<div class="profile_text">Your username and avatar can be seen by other players in-game.</div>
								</div>
								</li>
							</ul>
						</div>

						<!-- note -->

					</div>
				</div>

				<div class="col-lg-1">

				</div>
				

				<!-- Personal Information -->

				<div class="col-lg-7">
					<ul class=nav_menu>
						  <li class="list"><a href="#home">PERSONAL INFORMATION</a></li>
						  <li class="list"><a href="#news">SECURITY SETTINGS</a></li>
						  <li class="list"><a href="#contact">TRANSACTION HISTORY</a></li>
					</ul>
					<div class="col-lg-12">
					    <div class="account_section">
						<div class="section_title">PERSONAL INFORMATION</div>
						<div class="account_form_container">
							<form action="#" id="personal_form" class="personal_form" onsubmit="return false">
								<div>
									<!-- Email address -->
									<label for="account_email">EMAIL ADDRESS</label>
									<input type="text" id="account_email" class="account_input" value="rickmanik123@gmail.com" disabled>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<!-- First Name -->
										<label for="account_first_name">FIRST NAME</label>
										<input type="text" id="account_first_name" class="account_input" value="Ricky" disabled>
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="account_last_name">LAST NAME</label>
										<input type="text" id="account_last_name" class="account_input" value="Manik" disabled>
									</div>
								</div>
								<div>
									<!-- Gender -->
									<label for="account_gender">GENDER</label>
									<select name="account_gender" id="account_gender" class="dropdown_item_select account_input" disabled>
										<option></option>
										<option value=male selected>MALE</option selected>
										<option value=female>FEMALE</option>
										<option value=others>OTHERS</option>
									</select>								
								</div>
								<div>
									<!-- Birthdate -->
									<label for="account_birthdate">BIRTH DATE</label>
									<input type="text" id="account_birthdate" class="account_input" disabled>
								</div>
								<div>
									<!-- Mobile Number -->
									<label for="account_mobile_phone">MOBILE NUMBER</label>
									<input type="phone" id="account_mobile_phone" class="account_input" value="08xxxxxxxxxxx" disabled>
								</div>
								<div>
									<!-- Preferred Language -->
									<label for="account_preferred_language">PREFERRED LANGUAGE</label>
									<select name="account_preferref_language" id="account_preferred_language" class="dropdown_item_select account_input" disabled>
										<option></option>
										<option value=bahasa_indonesia selected>BAHASA INDONESIA</option>
										<option value=english>ENGLISH</option>
									</select>
								</div><br>
							</form>

							<button onclick="grayer('personal_form',false);">
								Edit</button>
							<button onclick="grayer('personal_form',true);">
								Save</button>

						</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<!-- JavaScript-->

	<script type="text/JavaScript">
	
	function grayer(formId, yesNo) 
	{
  		var f = document.getElementById(formId);
   		for(var i=0; i<f.length; i++) f[i].disabled = yesNo;
	
		window.onload=function(){grayer('personal_form',true);}; // disabled by default
	}
	</script>
	
	<?php include 'footer.php'?>

</div>

<!-- <script src="<?php echo base_url('assets/js/checkout.js')?>" type="text/JavaScript"></script> -->

</body>
</html>