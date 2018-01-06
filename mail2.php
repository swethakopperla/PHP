<html>
<body>

<?php  
   ini_set("sendmail_from", "swetha.k@itblabs.com");  
   $to = "swetha.k@itblabs.com";//change receiver address  
   $subject = "This is subject";  
   $message = "This is simple text message.";  
   $header = "From:swetha.k@itblabs.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == false ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?> 
</body>
</html>
