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
    <title>Maintenance - JEvents</title>
</head>

<body>
    <div class="imprintmain">
        <p class="sign" align="center">JEvents Maintenance Queries</p>
        <p class="text1" align="center"><i>Below you can find the list of all the links to the pages for the selected queries.</i></p>
        <p class="text1" align="center" style="padding-top: 0px;"><b>Links: </b></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_students.php">Add Student</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_clubs.php">Add Club</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_venues.php">Add Venue</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_requirement.php">Add requirements</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_president.php">Add President</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_eventmedia.php">Add Event Media</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_category.php">Add Categories</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_catreq.php">Add Requirement to Category</a></p>
        <p class="text1" align="center" style="padding-top: 0px;"><a href="add_medias.php">Add Media</a></p>
        <p class="link1" align="center" style="padding-top:0px;"><a href="index.php">Back to home</p>


    </div>

</body>

</html>
