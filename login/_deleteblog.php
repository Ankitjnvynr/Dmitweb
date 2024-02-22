<?php
    include '../partials/_db.php';
     $blog = $_POST['blog'];
    $sql = "DELETE FROM `blogs` WHERE `blog_id` = '$blog'";
    $result = $conn->query($sql);
    if($result){
        echo "deleted successfully";
    }
?>