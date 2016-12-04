<?php
/* Set e-mail recipient */
$myemail  = "contact@grameshphotography.in";
/* Check all form inputs using check_input function */
$yourname = "G.Ramesh Photography";
$subject  = "Enquire Regarding Photography";
//Fetching Values from URL
$name = $_POST['name1'];
$email = $_POST['email1'];
$message = $_POST['message1'];
$contact = $_POST['contact1'];
//sanitizing email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
if (!preg_match("/^[0-9]{10}$/", $contact)) {
echo "<span>* Please Fill Valid Contact No. *</span>";
} else {
$subject = $subject;
// To send php mail, the Content-type header must be set
//$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $myemail. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Message From ' . $name  . ',<br/>'
. '<br/>Business Prospect<br/><br/>'
. 'Name:' . $name . '<br/><br/>'
. 'Email:' . $email . '<br/><br/>'
. 'Contact No:' . $contact . '<br/><br/>'
. 'Message:' . $message . ''
. '<div>'
. '<br/>'
. '</div>';
$sendmessage = "<div style=\"background-color:#ff0000; color:white;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
$sendmessage = wordwrap($sendmessage, 70);

// Send mail by PHP Mail Function
mail("$myemail", $subject, $sendmessage, $headers);
echo "Your Query has been received, We will contact you soon.";
}
} else {
echo "<span>* invalid email *</span>";
}

?>