<?php
    require_once '_db.php';
    $blog = $_POST['blogid'];
    $sql = "SELECT * FROM `comments` WHERE `blog_id` = '$blog'";
    $result = $conn->query($sql);
    $num_rows = mysqli_num_rows($result);
    echo ($num_rows<2)?$num_rows." Comment":$num_rows." Comments";
    
    
?>