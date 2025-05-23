<?php
    function displayHeader($nowshowing = true, $login = true, $register = true, $logout = false){
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Cinema - Now Showing</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php"><h1>⭐ Star Cinema</h1></a>
            </div>
            <nav>
                <ul>
<?php    
    if ($nowshowing){
        echo '<li><a href="index.php">Now Showing</a></li>';
    }
    if ($login){
        echo '<li><a href="login.php" class="btn-login">Login</a></li>';
    }
    if ($register){
        echo '<li><a href="register.php" class="btn-login">Register</a></li>';
    }
    if ($logout){
        echo '<li><a href="logout.php" class="btn-login">Logout</a></li>';
    }
?> 
                </ul>
            </nav>
        </div>
    </header>
<?php
    }
?>
                