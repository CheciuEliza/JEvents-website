<?php

    $con = mysqli_connect('localhost', 'root', '');

    if (!$con) {
        echo 'Not connected to server';
        Logger::error("Not connected to server");
    }

    if (!mysqli_select_db($con, 'JEvents')) {
        echo 'Cannot select db';
        Logger::error("Cannot select db");
    }

    $FilePath = $_POST['FilePath'];
    $sql = "INSERT INTO Media (FilePath) VALUES ('$FilePath')";

    if (!mysqli_query($con, $sql)) {
        echo 'Not inserted';
        Logger::error("Not inserted to mysql");
    }
    else {
        echo 'Inserted';
        Logger::info("Inserted record to mysql");
    }

    echo '<br><a href="reference.php">Back to maintenance page. Redirecting in 5...</a>';
    header("refresh:5; url=reference.php");
    
?>
