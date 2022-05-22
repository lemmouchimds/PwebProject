<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="../Styles/inscription.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Inscriptions</title>
</head>

<?php
$_SESSION["status"]='';
$host="localhost";
$username="root";
$password="";
$database="eventpage";
$message="";

$connect = new PDO("mysql: host=$host; dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["subm"]))
    {
            // $query = "SELECT * FROM utilisateur WHERE Matricule= '".$_POST["matricule"]."'";
            // $statement = $connect->prepare($query);
            // $statement->execute();
            // $count = $statement->rowCount();;
            // if($count > 0)
            // {
            //     $message = "un utilisateur existe déja avec ce matriculle!";
            //     echo("<p style='color:red'> ".$message."</p>");
            // }
        
            $sql = "INSERT INTO utilisateur (Nom,Prenom,Email,Telephone,AnnUniv,Specialite,Faculte,Motif,Matricule) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt= $connect->prepare($sql);
            $stmt->execute([ $_POST["Nom"], $_POST["Prenom"],$_POST["Email"], $_POST["Telephone"],$_POST["AnnUniv"],$_POST["Specialite"],$_POST["Faculte"],$_POST["Motif"],$_POST["Matricule"]]);

            $_SESSION["status"] = "SETUT UP";
            header('location: ../index.php');
          
            
}
?>
<body>
    <header>
        <H1>Inscriptions</H1>
    </header>
<div class="container">
    <div class="container2">

    <main>
        <form action="" method ="post">
            <div class="unique-info">
                <h2>Inforamtion Unique</h2>
                <label for="matricule">Matricule</label>
                <input autofocus name="Matricule" type="text" id="matricule" placeholder="Matricule">
                <br>
                <label for="nom">Nom</label>
                <input name="Nom" type="text" id="nom" placeholder="Nom">
                <br>
                <label for="prenom">Prénom</label>
                <input name="Prenom" type="text" id="prenom" placeholder="Prénom">
                <br>
                <label for="email">Email</label>
                <input name="Email" type="email" id="email" required placeholder="Email">
                <br>
                <label for="telephone">Telephone</label>
                <input name="Telephone" type="tel" id="telephone" required placeholder="Telephone">
            </div>
            <div class="stydies">
                <h2>Etudes</h2>
                <label for="annee">Année universitaire</label>
                <select name="AnnUniv" id="annee" required>
                    <optgroup label="Licence"></optgroup>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <optgroup label="Master"></optgroup>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                </select>
                <div style="width:10px;"> </div>
                <br>
                <label for="annee">Faculté</label>
                <select name="Faculte" id="annee">
                    <option value="Mathématiques">Mathématiques</option>
                    <option value="Sciences Biologiques">Sciences Biologiques</option>
                    <option value="Génie Mécanique et Génie des Procédés">Génie Mécanique et Génie des Procédés</option>
                    <option value="Sciences de la Terre">Sciences de la Terre</option>
                    <option value="Physique">Physique</option>
                    <option value="Chimie">Chimie</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Génie électrique">Génie électrique </option>
                    <option value="Génie Civil">Génie Civil </option>
                </select>
                <div style="width:10px;"> </div>
                <br>
                <label for="specialite">Specialité</label>
                <input type="text" name="Specialite" id="specialite" required placeholder="Specialité">
                <br>
                <br>
                <label for="motif">Votre motif</label>
                <input type="text" name="Motif" id="motif" required placeholder="Motif">
            </div>
        
            </div>

            <div id="grid-item" >
            <button type="submit" name="subm" >Sign Up</button>
        </form>
        
        <div style="height: 2em;"> </div>
    </div>
    <div style="width:10px;"> </div>
    <div style=" font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;">Nos Statistiques D'inscriptions</div>
    <div class="container3" >
        
        <table class="center" style="margin:auto;padding:10px;">
            <tr style="margin:5px;">
                <th style="padding:10px;"><h3>Facultée</h3></th>
                <th style="padding:10px;"><h3>Nombre </h3></th>
            </tr>
            <tr style="margin:5px;">
            <?php      
                $conn = mysqli_connect("localhost", "root", "", "eventpage");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                 }
                 $sql2 = "SELECT  COUNT(Matricule), Faculte from utilisateur GROUP BY Faculte";
                 $result = $conn->query($sql2);
                    if ($result->num_rows > 0)
                        {
                         while($row = $result->fetch_assoc() )
                        {
                         ?>
                        <tr>
                        <th><?php echo $row['Faculte']; ?></th>
                        <th><?php echo $row['COUNT(Matricule)']; ?></th></tr>
                    <?php
                        }
                        } 
            ?>
        </table>
        <table class="center" style="margin:auto;padding:10px;">
            <tr style="margin:5px;">
                <th style="padding:10px;"><h3>Année Etude</h3></th>
                <th style="padding:10px;"><h3>Nombre </h3></th>
            </tr>
            <tr style="margin:5px;">
            <?php 
            $conn = mysqli_connect("localhost", "root", "", "eventpage");
            // Check connection
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             }
            $sql1 = "SELECT COUNT(Matricule), AnnUniv FROM utilisateur GROUP BY AnnUniv";
            $result = $conn->query($sql1);
                if ($result->num_rows > 0)
                    {
                    while($row = $result->fetch_assoc() )
                    {
                    ?>
                    <tr>
                    <th ><?php echo $row['AnnUniv']; ?></th>
                    <th ><?php echo $row['COUNT(Matricule)']; ?></th> </tr>  
                 <?php
                    }
                    } 
        ?> 
    </div>     
    </main> 
</div> 

</body>
</html>