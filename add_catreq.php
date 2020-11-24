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
    <title>Add Requirement to Category - JEvents</title>
</head>

<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'JEvents');
if (!$mysqli) {
    echo 'Not connected to server';
    Logger::error("Not connected to server");
}
$resultSet = $mysqli->query("SELECT ID, Description FROM Requirements");
if (!$resultSet) {
    echo 'Error getting results';
    Logger::error("Error getting results");
}

?> 
<body>
    <div class="catreqmain">
        <p class="sign" align="center">Add requirement to category</p>
        <form class="form1" action="add_catreq_helper.php" method="post">
            <p align="center">Requirement:</p>
            <select name="RequirementID" class="un ">
                <?php

                    while($rows = $resultSet->fetch_assoc()) {
                        $ID = $rows['ID'];
                        $Description = $rows['Description'];
                        echo "<option value='$ID'>$Description</option>";
                    }

                ?>
            </select>
            <p align="center">Category:</p>
            <select name="CategoryID" class="un ">
            <?php

                $resultSet = $mysqli->query("SELECT ID, Name FROM Categories");
                if (!$resultSet) {
                    echo 'Error getting results';
                    Logger::error("Error getting results");
                }
                while($rows = $resultSet->fetch_assoc()) {
                    $ID = $rows['ID'];
                    $Name = $rows['Name'];;
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