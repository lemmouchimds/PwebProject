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
    <title>Events</title>
     <script>
      function myFunction() {
        var popup1 = document.getElementByClassName("popuptext");
        popup1.classList.toggle("show");
      }
      </script>
    <!-- <script>
      function myFunction2() {
        var popup2 = document.getElementById("myPopup2");
        popup2.classList.toggle("show");
      }
      </script>
    <script>
      function myFunction3() {
        var popup3 = document.getElementById("myPopup3");
        popup3.classList.toggle("show");
      }
      </script>
    <script>
      function myFunction4() {
        var popup4 = document.getElementById("myPopup4");
        popup4.classList.toggle("show");
      }
      </script>
    <script>
      function myFunction5() {
        var popup5 = document.getElementById("myPopup5");
        popup5.classList.toggle("show");
      }
      </script>
    <script>
      function myFunction6() {
        var popup6 = document.getElementById("myPopup6");
        popup6.classList.toggle("show");
      }
      </script>
    <script>
      function myFunction7() {
        var popup7 = document.getElementById("myPopup7");
        popup7.classList.toggle("show");
      }
      </script>  -->
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
        <h2>
                ".$event["name"]."
              </h2>
              <p>".$event["description"]."</p>
              <div class='popup' onclick='myFunction()'>See Details
                <span class='popuptext' >Date:".$event["date"]."</br>Type:".$event["type"]."</span>
              </div>
            </div>
          </div>
        </div>
    ");
   
    }
    ?>
</div>

<!-- 
 <div class="container1" >
       <div class="column">
          <div class="card">
            <img src="../Pics/AGCX.57ffb36d.svg" width="100%">
            <div class="container">
              <h2>
                
              </h2>
              <p>A nation-wide game development contest held annually.</p>
              <div class="popup" onclick="myFunction1()">See Details
                <span class="popuptext" id="myPopup1">Date:</br>Type:</span>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../Pics/MCTF3.0.8158779b.svg" width="75%">
            <div class="container">
              <h2>Micro Catch The Flag</h2>
              <p>A conference about cybersecurity alongside a national CTF competition organised by Micro Club.</p>
              <div class="popup" onclick="myFunction2()">See details
                <span class="popuptext" id="myPopup2">Date:</br>Type:</span>
              </div>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="https://algeriadisrupt.com/wp-content/uploads/2020/09/algeriadisrupt_logo.png"  width="90%">
            <div class="container">
              <h2>ALGERIA DISRUPT</h2>
              <p>Two days bootcamp about visiualization and cloud-computing presented by Dr Djelloul BOUIDA.</p>
              <div class="popup" onclick="myFunction3()">See details
                <span class="popuptext" id="myPopup3">Date</br>Type:</span>
              </div>
            </div>
          </div>
        </br>
          <div class="column">
            <div class="card">
              <img src="../Pics/1 Q6GvThiNFFZByD00DJANVg.jpeg" width="100%">
              <div class="container">
                <h2>Local Hack Day</h2>
                <p>
                A nation-wide game development contest held annually.</p>
                <div class="popup" onclick="myFunction4()">See details
                  <span class="popuptext" id="myPopup4">Date:</br>Type:</span>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="column">
          <div class="card">
            <img src="https://microclub.net/static/media/RedHat%20fancy%20logo.bd6a0d59.svg" width="80%" {style=justify-content:center;}>
            <div class="container">
              <h2>MC RedHat Training Camp</h2>
              <p>Two days bootcamp about visiualization and cloud-computing presented by Dr Djelloul BOUIDA.</p>
              <div class="popup" onclick="myFunction5()">See details
                <span class="popuptext" id="myPopup5">Date:</br>Type:</span>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../Pics/Logo-africa-MEA.png" width="100%"  >
            <div class="container">
              <h2>AFRICA By Incub</h2>
              <p>Two days bootcamp about visiualization and cloud-computing presented by Dr Djelloul BOUIDA.</p>
              <div class="popup" onclick="myFunction6()">See details
                <span class="popuptext" id="myPopup6">Date:</br>Type:</span>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="https://microclub.net/static/media/Hacktober%20Fest.59c7a339.svg" width="100%">
            <div class="container">
              <h2>MC Hacktober FEST</h2>
              <p>A month long celebration of open source presented by digital ocean, sponsored by Github and hosted by Micro Club.</p>
              <div class="popup" onclick="myFunction7()">See details
                <span class="popuptext" id="myPopup7">Date:</br>Type:</span>
              </div>
            </div>
          </div>
        </div>
      

  </div>   -->
</body>
</html>
