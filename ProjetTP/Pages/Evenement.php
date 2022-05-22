<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="eventpage";

$connect = new PDO("mysql: host=$host; dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM events";
  $statement = $connect->prepare($query);
  $statement->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/evenment.css">
    <script src="../JS/webo.js"></script> 
    <title>Events</title>
</head>
<body>   
  
  <div class="container1" >
    <?php
      $i = 1;
      while($event = $statement->fetch()){
        
        echo("
        <div class='column'>
        <div class='card'>
         <img src= ".$event["img"]." width='100%'>
        <div class='container'>
              <h1>
                ".$event["name"]."
              </h1>
              <h3 >".$event["description"]."</h3>
              <div class='popup' onclick='myFunction$i()'>See Details
                <span class='popuptext' id='myPopup$i'>Date:".$event["date"]."</br>Type:".$event["type"]."</span>
              </div>
            </div>
          </div>
        </div>
    ");
    $i++;
    }
    ?>
</div>


</body>
</html>
