<?php
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
    <title>Your Search Results</title>
</head>

<body>
    <?php
    $queries = array(
        "SELECT S.ID AS Details, S.FirstName AS 'First Name', S.LastName AS 'Last Name', S.Email, C.Name AS 'Club Name' FROM Students S, Presidents P, Clubs C WHERE (C.Name LIKE '%value%' AND P.ClubID=C.ID AND P.StudentID=S.ID)",
        "SELECT ID AS Details, EventName AS 'Name', DATE_FORMAT(StartTime, '%a, %e %b %Y %h:%i %p') AS 'Start Time', DATE_FORMAT(EndTime, '%a, %e %b %Y %h:%i %p') AS 'End Time' FROM Events WHERE StartTime < NOW() + INTERVAL 'value' DAY",
        "SELECT ID AS Details, Name, Description FROM Clubs WHERE Name LIKE '%value%'"
    );
    $tables = array(
        "Students",
        "Events",
        "Clubs"
    );
    $mysqli = mysqli_connect('localhost', 'user_ro', 'password', 'JEvents');
    if (!$mysqli) {
        echo 'Can not connect to mysql';
        Logger::error("Can not connect to mysql");
    }
    $QueryID = $_GET['query'];
    $SearchValue = $_GET['value'];
    $tableName = $tables[$QueryID];
    $QueryStr = str_replace("value", $SearchValue, $queries[$QueryID]);
    $resultSet = $mysqli->query($QueryStr);
    if (!$resultSet) {
        echo 'Error getting results';
        Logger::error("Error getting results");
    }
    $fieldInfo = $resultSet->fetch_fields();
    $width = 100 + count($fieldInfo) * 300;
    $height = 200 + mysqli_num_rows($resultSet) * 50;
    echo "<div class=\"imprintmain\" style=\"height: $height; width: $width; margin-top:7em;\">";
    echo "<p class=\"sign\" align=\"center\">Your search results for $SearchValue:</p>";
    echo "<table class='result_table'>";
    echo "<tr style=\"background: linear-gradient(90deg, rgba(0,151,219,1) 0%, rgba(9,9,121,1) 100%); color: white;\">";
    foreach ($fieldInfo as $val) {
        echo "<td>";
        echo $val->name;
        echo "</td>";
    }
    echo "</tr>";
    while ($rows = $resultSet->fetch_assoc()) {
        echo "<tr>";
        foreach ($rows as $k => $v) {
            echo "<td>";
            if ($k == 'Details') {
                echo "<a href='search_result.php?id=$v&table=$tableName'>Click here</a>";
            } else
                echo $v;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>

</body>

</html>