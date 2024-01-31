<?php
require_once("_db.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Access form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
}
$sql = "INSERT INTO `contactpage`( `name`,  `email`, `subject`,`phone`, `message`, `dt`) VALUES ('$name','$email','$subject','$phone','$message',NOW())";
$result = $conn->query($sql);
if ($result) {
    echo "Form Sent Successfully";
}


?>