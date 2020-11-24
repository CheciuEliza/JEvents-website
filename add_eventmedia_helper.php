<?php
error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE); 
ini_set('error_log', '/logs/error_log.txt');
include_once('Logger.php');
$filename = basename(__FILE__);
Logger::info("$filename accessed");
?>

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

    $EventID = $_POST['EventID'];
    $MediaID = $_POST['MediaID'];
    $sql = "INSERT INTO EventMedia (EventID, MediaID) VALUES ('$EventID', '$MediaID')";

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