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
<html>

<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in - JEvents</title>
</head>

<body>
  <div class="main" style="margin-top:3em; margin-bottom:3em;">
    <p class="sign" align="center">Welcome to JEvents! Please enter your username and password.</p>
    <p class="text1" align="center">If it's happening, you will find it here!</p>
    <form class="form1" action="login_check.php" method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="user">
      <input class="un " type="password" align="center" placeholder="Password" name="pass">
      <input type="submit" class="submit" align="center" value="Sign in">
      </form>
        <p class="link1" align="center"><a href="imprint.php">Imprint</p>
          <p class="link1" align="center" style="padding-top: 0px;"><a href="index.php">Back to home</p>
            
                
    </div>
     
</body>

</html>