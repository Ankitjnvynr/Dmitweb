<?php
    include '../partials/_db.php';

    $id = $_POST['id'];

    $sql = "UPDATE `appointment` SET `notify` = '1' WHERE `appointment`.`sr` = '$id';";
    $result = $conn->query($sql);
    if($result){
        echo "updated";
    }
    
?>
