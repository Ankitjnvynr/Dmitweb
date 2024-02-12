<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

require_once("_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $prefDate = $_POST['prefDate'];

    $sql = "INSERT INTO `appointment`( `name`, `phone`, `age`, `email`, `prefdate`, `dt`) VALUES ('$name','$phone','$age','$email','$prefDate',NOW())";
    $result = $conn->query($sql);
    if ($result) {
        try {
            $mail->SMTPDebug = 2;									 
            $mail->isSMTP();										 
            $mail->Host	 = 'smtp-mail.outlook.com;';				 
            $mail->SMTPAuth = true;							 
            $mail->Username = 'ankitbkana@outlook.com';				 
            $mail->Password = 'ankit1558';					 
            $mail->SMTPSecure = 'tls';							 
            $mail->Port	 = 587; 
        
            $mail->setFrom('ankitbkana@outlook.com', 'BigByte');		 
            
            $mail->addAddress('ankitbkana@gmail.com', $name);
            
            $mail->isHTML(true);								 
            $mail->Subject = 'Appointment for DMIT Test';
            $mail->Body = 'New Appointment:- <br>
                        Name: '.$name.'<br>
                        Age: '.$age.'<br>
                        Phone: '.$phone.'<br>
                        Email: '.$email.'<br>
                        Prefferd Date: '.$prefDate.'<br>
                ';
            $mail->AltBody = 'My name is '.$name.'
            Age: '.$age.'  
            Phone: '.$phone.'  
            Email: '.$email.'  
            Prefferd Date: '.$prefDate.'  
            ';
            $mail->send();
            echo "Form Sent Successfully!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }
}
?>