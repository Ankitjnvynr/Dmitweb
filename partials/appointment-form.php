
<?php
    require_once("_db.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $prefDate = $_POST['prefDate'];

        $sql = "INSERT INTO `appointment`( `name`, `phone`, `age`, `email`, `prefdate`, `dt`) VALUES ('$name','$phone','$age','$email','$prefDate',NOW())";
        $result = $conn->query($sql);
        if($result){
            echo "Form Sent Successfully" ;
        }
    }
?>