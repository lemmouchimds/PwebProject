<!DOCTYPE html>

<?php
    $host = "localhost";
    $username ="root";
    $password = "";
    $database = 

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
            <form action="" method=post>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Example@example.com">
                <br>
                <label for="matricule">Matricule</label>
                <input type="text" name="matricule" id="matricule" placeholder="202012345678">
                <br>
                <button type="submit" name=login>Login</button>
            </form>

            <a href="Inscription.html">Don't have an account</a>
        </div>
    </main>
</body>
</html>