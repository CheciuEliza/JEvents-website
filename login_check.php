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

    $mysqli = mysqli_connect('localhost', 'root', '');

    if (!$mysqli) {
        echo 'Not connected to server';
        Logger::error("Not connected to server");
    }

    if (!mysqli_select_db($mysqli, 'JEvents')) {
        echo 'Cannot select db';
        Logger::error("Cannot select db");
    }

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $resultSet = $mysqli->query("SELECT * FROM Users WHERE Username='$user' AND Pass='$pass'");
    if (!$resultSet) {
        echo 'Error getting user management table results';
        Logger::error("Error getting user management table results");
    }
    $logged_in = false;
    if ($resultSet->num_rows > 0)
        $logged_in = true;
?>

<html>

<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title><?php
  if ($logged_in)
    echo 'Welcome';
    else
    echo 'Error';
  ?> - JEvents</title>
</head>

<body>
  <div class="main" style="margin-top:7em; height:300px;">
    <p class="sign" align="center"><?php
        if ($logged_in)
            echo 'Welcome to JEvents! Redirecting you to maintenance page...';
        else
            echo 'Error logging in: incorrect username/password. Redirecting to login page...';
    ?></p>
    <p class="link1" align="center" style="padding-top: 0px;">
    <?php
        if ($logged_in) {
            echo '<a href="reference.php">Maintenance page</a>';
            header("refresh:5; url=reference.php");
        }
        else {
            echo '<a href="login.php">Login page</a>';
            header("refresh:5; url=login.php");
        }
    ?></p>
            
                
    </div>
     
</body>

</html>