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
    <title>Add Media to Event - JEvents</title>
</head>

<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'JEvents');
if (!$mysqli) {
    echo 'Can not connect to mysql';
    Logger::error("Can not connect to mysql");
}
$resultSet = $mysqli->query("SELECT ID, FilePath FROM Media");
if (!$resultSet) {
    echo 'Error getting results';
    Logger::error("Error getting results");
}
?> 
<body>
    <div class="catreqmain">
        <p class="sign" align="center">Add media to event</p>
        <form class="form1" action="add_eventmedia_helper.php" method="post">
            <p align="center">Media:</p>
            <select name="MediaID" class="un ">
                <?php

                    while($rows = $resultSet->fetch_assoc()) {
                        $ID = $rows['ID'];
                        $FilePath = $rows['FilePath'];
                        echo "<option value='$ID'>$FilePath</option>";
                    }

                ?>
            </select>
            <p align="center">Event:</p>
            <select name="EventID" class="un ">
            <?php

                $resultSet = $mysqli->query("SELECT ID, EventName FROM Events");
                if (!$resultSet) {
                    echo 'Error getting results';
                    Logger::error("Error getting results");
                }
                while($rows = $resultSet->fetch_assoc()) {
                    $ID = $rows['ID'];
                    $Name = $rows['EventName'];;
                    echo "<option value='$ID'>$Name</option>";
                }

            ?>
            </select>
            <input type="submit" class="submit" align="center" value="Submit">
        </form>
        <p class="link1" align="center"><a href="imprint.php">Imprint</p>
        <p class="link1" align="center" style="padding-top: 0px;"><a href="index.php">Back to home</p>


    </div>

</body>

</html>