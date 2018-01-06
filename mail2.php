<html>
<body>

<?php  
   ini_set("sendmail_from", "swethareddy948@gmail.com");  
   $to = "swethak.itblabs@gmail.com";//change receiver address  
   $subject = "This is subject";  
   $message = "This is simple text message.";  
   $header = "From:swethareddy948@gmail.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?> 
</body>
</html>
