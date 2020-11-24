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
  <title>Imprint - JEvents</title>
</head>

<body>
    <div class="imprintmain">
      <p class="sign" align="center">JEvents Imprint</p>
      <p class="text1" align="center"><i>This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.</i></p>
      <p class="text1" align="center" style="padding-top: 0px;"><b>Contact: </b></p>
      <p class="text1" align="center" style="padding-top: 0px;">m.niazi@jacobs-university.de</p>
      <p class="text1" align="center" style="padding-top: 0px;">e.checiu@jacobs-university.de</p>
      <p class="text1" align="center" style="padding-top: 0px;">k.vonseggern@jacobs-university.de</p>
      <p class="link1" align="center" style="padding-top:0px;"><a href="index.php">Back to home</p>
              
                  
      </div>
       
  </body>
  
  </html>