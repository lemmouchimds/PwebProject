<!DOCTYPE html>
<?php
session_start();
$host="localhost";
$number = 10;
$username="root";
$password="";
$database="microclubbd";
$message="";

$connect = new PDO("mysql: host=$host; dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo("<p style='color:red'> test1</p>");
if(isset($_POST["inscription"]))
{
		if(empty($_POST["matricule"]) || empty($_POST["nom"]) || empty($_POST["email"]))
		{
			$message = '<label>Veuillez remplir les champs obligatoirs</label>';
		}
		else
		{
		    $query = "SELECT * FROM user WHERE Matricule= '".$_POST["matricule"]."'";
            $statement = $connect->prepare($query);
            $statement->execute();
            $count = $statement->rowCount();
        if($count > 0)
        {
            $message = "l'utilisateur existe déja!";
            echo("<p style='color:red'> ".$message."</p>");
        }
        else
        {
            $sql = "INSERT INTO user (Matricule, Email, UserName) VALUES (?,?,?)";
            $stmt= $connect->prepare($sql);
            $stmt->execute([$_POST["matricule"], $_POST["email"], $_POST["nom"]]);
        }
		}
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="../Styles/inscription.css">
    <title>Inscriptions</title>
</head>
<body>
<?php
 echo("Hellow !");
?>
    <header>
        <H1>Inscriptions</H1>
    </header>
<div class="container">
    <div class="container2">

    <main>
	<?php
	if(isset($message))
	{
		echo '<label>'.$message.'</label>';
	}
	?>
        <form method="post" action="">
            <div class="unique-info">
                <h2>Inforamtion Unique</h2>
                <label for="matricule">Matricule</label>
                <input autofocus type="text" id="matricule" name="matricule" required placeholder="Matricule">
                <br>
                <label for="nom">Nom</label>
                <input name="nom" type="text" id="nom" required placeholder="Nom">
                <br>
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" id="prenom" placeholder="Prénom">
                <br>
                <label for="email">Email</label>
                <input name="email" type="email" id="email" required placeholder="Email">
                <br>
                <label for="telephone">Telephone</label>
                <input name="telephone" type="tel" id="telephone" required placeholder="Telephone">
            </div>
            <div class="stydies">
                <h2>Etudes</h2>
                <label for="annee">Année universitaire</label>
                <select name="annee" id="annee" required>
                    <optgroup label="Licence"></optgroup>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <optgroup label="Master"></optgroup>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                </select>
                <br>
                <label for="specialite">Specialité</label>
                <input type="text" name="specialite" id="specialite" required placeholder="Specialité">
                <br>
                <label for="faculte">Faculté</label>
                <input type="text" name="faculte" id="faculte" required placeholder="Faculté">
                <br>
                <label for="motif">Votre motif</label>
                <input type="text" name="motif" id="motif" required placeholder="Motif">
            </div>
                
            <button type="submit" name="inscription">Sign Up</button>
        </form>
    </main>
    <div class="spc"> </div>
    </div>
</div> 

</body>
</html>