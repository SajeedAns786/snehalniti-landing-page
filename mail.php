<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>



<?php
		require_once("conn.php");
		//$conn = mysqli_connect("localhost","root","","snehalniti_landing");

			if (isset($_POST['email']) && !empty($_POST['email'])) 
			{
				//$pass_vvip="VVIP";$pass_vip="VIP";$pass_general="General";
								   
				 $userName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
				 $userMail = isset($_POST['email']) ? $_POST['email'] : '';
					
				 $userPhone = isset($_POST['phone']) ? $_POST['phone'] : '';
				$userproffession = isset($_POST['proffession']) ? $_POST['proffession'] : '';
				 $userCity = isset($_POST['location']) ? $_POST['location'] : '';
				
	
		   $eventdate = isset($_POST['eventdate']) ? $_POST['eventdate'] : '';  
		   
		  
		  $result=mysqli_query($conn,"INSERT INTO all_seminar_leads_copy2(seminar_name,seminar_date,name,email,phone,added_by_2,city) 
			VALUES ('dailyweb','$eventdate','".$userName."','".$userMail."','".$userPhone."','".$userproffession."','".$userCity."') ");
			
		
			if ($result==1)
			{
					/*echo '<script language="javascript" type="text/javascript"> 
					  alert("Form SuceessFully to submitted");
					  window.location = "index.html";
					  </script>';*/
					  
					  
					  
					 
					  
					  
                   
                    	echo "<script language=javascript type=text/javascript> 
					  swal('Thank You', 'Registration Successful', 'success').then(function() {
    window.location = 'index.php';
});
					  </script>";
                    
                   
			}
			else
			{
				echo "not";
			}	
				
				
				 
		} ?>
		
	</body>
</html>
