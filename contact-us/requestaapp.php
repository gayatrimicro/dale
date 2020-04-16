<?php 
	// var_dump($_POST);
	// exit();
 	 $name = $_POST["name_field"];
 	 $emailid  = $_POST["email_field"];
 	 
	 $pnumber= $_POST["number_field"];
	 $msg = $_POST["message_field"];
	 

	 
	 // $location = $_POST["location"];

	 $subject ="Claim Request " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Dale R. Rose <' . $emailid .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>First name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $name ."</td>
	                 </tr>

	                  <tr>
	                   <td align='left' width='35%'><strong>Email:</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $emailid ."</td>
	                 </tr>


	   			  	<tr>
	                   <td align='left' width='35%'><strong>Phone number :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $pnumber ."</td>
	                 </tr>

	   			  	<tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $msg ."</td>
	                 </tr>
	                 
	               </table>";  
	              
	  	  //if(mail("dale@roseknowslaw.com,aarielalmeida88@gmail.com", $subject, $message, $headers))
			 if(mail("aarielalmeida88@gmail.com,seo@gmicro.us", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully"; 
		}
		// else{
		// 	echo "error";
		// }

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>