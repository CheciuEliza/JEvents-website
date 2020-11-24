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
  <title>Search - JEvents</title>
</head>

<body>
  <div class="imprintmain" style="height:500px;">
    <p class="sign" align="center">JEvents Search Options</p>
    <p class="text1" align="center"><i>Below you can find the list of all the searches you can perform on the database.</i></p>
    <p class="text1" align="center" style="padding-top: 0px;"><b>Links: </b></p>
    <p class="text1" align="center" style="padding-top: 0px;"><a href="search_clubs.php">Search for Club Information</a></p>
    <p class="text1" align="center" style="padding-top: 0px;"><a href="search_next_events.php">Search for Events in Next Days</a></p>
    <p class="text1" align="center" style="padding-top: 0px;"><a href="search_club_pres.php">Search a Club's President's Information</a></p>
    <p class="link1" align="center" style="padding-top:0px;"><a href="index.php">Back to home</p>


</div>
     
</body>

</html>