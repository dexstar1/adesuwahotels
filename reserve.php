<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

mail($to, $subject, $message, $headers);
    
$to  = 'hello@adesuwahotels.com'; 
$subject = 'Reservation';
$message = "
<html>
<head>
  <title>Application form</title>
</head>
<body>
   <table class='table table-striped'>
   <tr><td>title</td><td>".$_POST['name']."</td></tr>
   <tr><td>full name</td><td>".$_POST['email']."</td></tr>
   <tr><td>Personal Email</td><td>".$_POST['phone']."</td></tr>
   </table>
</body>
</html>
";
    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: hello@adesuwahotels.com' . "\r\n";
mail($to, $subject, $message, $headers);
    
$to2  = $_POST['work_email']; 
$subject = 'Reservation';
$message = "
Thanks for choosing Adesuwahotels.
<br>
We will get back to you shortly with details of service availability;
<br>
Meanwhile, you can call this phone numbers +2348176784555 for further enquiry.
<br>
Best Regards.
<br>
Adesuwahotels";
    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: hello@adesuwahotels.com';

mail($to2, $subject, $message, $headers);
}

?>