<?php
error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE); 
ini_set('error_log', '/logs/error_log.txt');
include_once('Logger.php');
$filename = basename(__FILE__);
Logger::info("$filename accessed");
$mysqli = mysqli_connect('localhost', 'root', '', 'JEvents');
if (!$mysqli) {
    echo 'Can not connect to mysql';
    Logger::error("Can not connect to mysql");
}
$query = "SELECT Name FROM Clubs";
$club_names = array();
$resultSet = $mysqli->query($query);
if (!$resultSet) {
    echo 'Error getting results';
    Logger::error("Error getting results");
}
while ($rows = $resultSet->fetch_assoc()) {
        array_push($club_names, $rows["Name"]);
}
?>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Search Clubs By Name - JEvents</title>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="stumain" style="height: 450px;">
        <p class="sign" align="center">Search clubs by name:</p>
        <form class="form1" action="search_results.php" method="get">
            <input type="text" name="value" class="un " placeholder="Club name" id="autocomplete">
            <input type="hidden" name="query" value="2" />
            <input type="submit" class="submit" align="center" value="Submit">
        </form>
        
        <p class="link1" align="center"><a href="imprint.php">Imprint</p>
        <p class="link1" align="center" style="padding-top: 0px;"><a href="index.php">Back to home</p>


    </div>

</body>
<script>
var tags = <?php echo json_encode($club_names); ?>;
// var tags = ;
$( "#autocomplete" ).autocomplete({
  source: function( request, response ) {
          var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
          response( $.grep( tags, function( item ){
              return matcher.test( item );
          }) );
      }
});
</script>

</html>