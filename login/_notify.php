<?php
    include '../partials/_db.php';

    $sql = "SELECT * FROM  `appointment` WHERE `notify` = '0'";
    $result = $conn->query($sql);

    $data = array(); // Create an empty array to store the result

    while($row = mysqli_fetch_assoc($result)){
        $data[] = array(
            'sr' => $row['sr'],
            'notify' => $row['notify'],
            'name' => $row['name']
        );
    }

    // Convert the array to JSON
    $json_data = json_encode($data);

    // Send the JSON response
    header('Content-Type: application/json');
    echo $json_data;
?>
