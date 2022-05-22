<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/log-in.css">
    <title>Sign in</title>

    <?php $host="localhost";
            $number = 10;
            $username="root";
            $password="";
            $database="eventpage";
            $message="";

            $connect = new PDO("mysql: host=$host; dbname=$database", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_POST["namo"]))
            {
                
                {
                    $query = "SELECT * FROM utilisateur WHERE Matricule = '".$_POST["matricule"]."'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $count = $statement->rowCount();
                    
                    if($count > 0)
                    {
                        $_SESSION["val"] = $statement->fetch()["Prenom"];
                        header("location: ../index.php");
                    }
                }
                echo($message); 
            }
?>
</head>
<body>
    <header>
    </header>
    
    <main>
        
        <div class="container">
            <h1>Log in</h1>
            <form action="../index.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" required id="email" placeholder="Example@example.com">
                <br>
                <label for="matricule">Matricule</label>
                <input type="text" name="matricule" required id="matricule" placeholder="202012345678">
                <br>
                <button type="submit" name="namo">Login</button>
            </form>

            <a href="Inscription.php">Don't have an account</a>
        </div>
    </main>
</body>
</html>

