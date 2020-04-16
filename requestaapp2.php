<?php 
	// var_dump($_POST);
	// exit();
 	 $fname = $_POST["req_fname"];
 	 $lname = $_POST["req_lname"];
 	 $email  = $_POST["req_email"];
 	 $number  = $_POST["req_number"];
	 // $text_area= $_POST["text_area"];
	 

	 
	 // $location = $_POST["location"];

	$subject ="Claim Request " . $fname;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Dale R. Rose <' . $email .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>First name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $fname ."</td>
	               </tr>

	               <tr>
	                   <td align='left' width='35%'><strong>Last name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $lname ."</td>
	               </tr>

	                 
	                  <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $email ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Phone Number :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $number ."</td>
	                 </tr>


	   			  	
	   			  	
	                 
	               </table>";  
	              
	  	  if(mail("dale@roseknowslaw.com,aarielalmeida88@gmail.com", $subject, $message, $headers))
			// if(mail("roxanetlowry@gmail.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		else{
			echo "error";
		}

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>