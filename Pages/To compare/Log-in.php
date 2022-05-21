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

if(isset($_POST["login"]))
{
    if(empty($_POST["matricule"]) || empty($_POST["email"]))
    {
        $message = "Veuillez remplir les champs obligatoirs!";
    }
    else
    {
        $query = "SELECT * FROM user WHERE Matricule= '".$_POST["matricule"]."'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $count = $statement->rowCount();
        
        if($count > 0)
        {
            $_SESSION["username"] = $statement->fetch()["UserName"];
            header("location: ../index.php");
        }
    }
    echo($message);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/log-in.css">
    <title>Sign in</title>
</head>
<body>
    <header>
    </header>
    
    <main>
        
        <div class="container">
            <h1>Log in</h1>
            <form method="post" action="">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Example@example.com">
                <br>
                <label for="matricule">Matricule</label>
                <input type="text" name="matricule" id="matricule" placeholder="202012345678">
                <br>
                <button type="submit" name="login">Login</button>
            </form>

            <a href="Inscription.html">Don't have an account</a>
        </div>
    </main>
</body>
</html>