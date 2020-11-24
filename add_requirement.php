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
  <title>Add Requirement - JEvents</title>
</head>

<body>
  <div class="fb_main">
    <p class="sign" align="center">Add requirement to database</p>
    <form class="form1" action="add_req.php" method="post">
      <input type="text" name="Description" class="fb ">
    <!-- <textarea name="Description" maxlength="255" style="resize: none;" placeholder="Description" class="fb "></textarea> -->
      <input type="submit" class="submit" align="center" value="Submit">
      </form>
        <p class="link1" align="center"><a href="imprint.php">Imprint</p>
          <p class="link1" align="center" style="padding-top: 0px;"><a href="index.php">Back to home</p>
            

    </div>
     
</body>

</html>