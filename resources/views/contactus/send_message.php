<?php
//echo "<pre>";
//print_r($_POST);
//die();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$info = $_POST['message'];



$message = '<html><body>';
$message .= '<h3 style="color:#297db4; ">' . "Form: " . "$email".'</h3>';
$message .= '<p style="color:#080; font-size: 18px; "><br/>'. "$info".'</p>';

$message .= '<h3 style="color:#297db4; ">' . "Name : " . "$name".'</h3>';

$message .= '<h3 style="color:#297db4; ">' . "Phone: " . "$phone".'</h3>';

$message .= '</html></body>';


$headers = "Form: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: " . strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$isSuccess = mail('oshitsd99@gmail.com', 'Residential Security and Access', $message, $headers);
if($isSuccess){
    header('Location:  http://myshop.csitbd.com/Contact-Us');
    return redirect('/Contact-Us')->with('sendMail', 'Your message has been send. Thank You ');
}
else{
    header('Location:  http://myshop.csitbd.com/Contact-Us');
    return redirect('/Contact-Us')->with('wrngMail', 'Something went wrong ! ');
}
?>
