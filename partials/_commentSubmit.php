<?php
require_once '_db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $name = $_POST['name'];
    echo $email = $_POST['email'];
    echo $message = $_POST['message'];
    echo $blogid = $_POST['blogid'];
    echo $perentid = isset($_POST['perentid']) ? $_POST['perentid'] : '0';

    $sql = "INSERT INTO `comments`( `name`, `email`, `message`, `blog_id`, `perent_id`) VALUES ('$name','$email','$message','$blogid','$perentid')";

    if ($conn->query($sql)) {
        echo "Your comment added";
    } else {
        echo $conn->error;
    }



}
?>