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
    <title>Your Individual Search Result</title>
</head>

<body>
    <?php
    $mysqli = mysqli_connect('localhost', 'user_ro', 'password', 'JEvents');
    if (!$mysqli) {
        echo 'Can not connect to mysql';
        Logger::error("Can not connect to mysql");
    }
    $Table = $_GET['table'];
    $ID = $_GET['id'];
    $query = "SELECT * FROM $Table WHERE ID=$ID";
    if ($Table == "Events") {
        $query = "SELECT E.EventName AS 'Event Name', DATE_FORMAT(StartTime, '%a, %e %b %Y %h:%i %p') AS 'Start Time', 
        DATE_FORMAT(EndTime, '%a, %e %b %Y %h:%i %p') AS 'End Time', E.EventDesc as 'Description', V.Name AS 'Venue',
        CONCAT(S.FirstName, ' ', S.LastName) AS 'President Name', S.Email, Cl.Name AS 'Club', C.Name AS 'Category'
        FROM Venues V, Presidents P, Students S, Categories C, Events E, Clubs Cl WHERE (E.CatID = C.ID AND E.VenueID = V.ID
        AND E.PresidentID = P.StudentID AND P.StudentID = S.ID AND P.ClubID = Cl.ID AND E.ID=$ID)";
    } elseif ($Table == "Students") {
        $query = "SELECT CONCAT(S.FirstName, ' ', S.LastName) AS 'Name', S.Email AS 'Email', C.Name AS 'Club' FROM
        Students S, Presidents P, Clubs C WHERE (S.ID = P.StudentID AND C.ID = P.ClubID AND S.ID=$ID)";
    } elseif ($Table == "Clubs") {
        $query = "SELECT C.Name, C.Description, CONCAT(S.FirstName, ' ', S.LastName) AS 'President Name', S.Email AS 'Email'
         FROM Clubs C, Students S, Presidents P WHERE (C.ID=$ID AND S.ID=P.StudentID AND P.ClubID=C.ID)";
    }

    $resultSet = $mysqli->query($query);
    if (!$resultSet) {
        echo 'Error getting results';
        Logger::error("Error getting results");
    }
    $row = $resultSet->fetch_assoc();
    $height = 250 + count($row) * 40;
    echo "<div class=\"imprintmain\" style=\"height: $height; margin-top:7em;\">";
    echo "<p class=\"sign\" align=\"center\">Your individual result from $Table:</p>";
    echo "<table class='result_table'>";
    echo "<tr style=\"background: linear-gradient(90deg, rgba(0,151,219,1) 0%, rgba(9,9,121,1) 100%); color: white;\">";
    echo "<td>";
    echo "Field";
    echo "</td>";
    echo "<td>";
    echo "Value";
    echo "</td>";
    echo "</tr>";
    foreach ($row as $k => $v) {
        echo "<tr>";
        echo "<td>";
        echo $k;
        echo "</td>";
        echo "<td>";
        echo $v;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>

</body>

</html>