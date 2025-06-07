<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Cinema</title>
    <link rel="stylesheet" href="/cinema-website/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/cinema-website/index.php">
                    <h1>⭐ Star Cinema</h1>
                </a>
            </div>
            <nav>
                <ul>
                    <?php
                    if (isset($_SESSION["user_id"]) && isset($_SESSION["role"])) {
                        if ($_SESSION["role"] === "manager") {
                            $nowshowing = true;
                            $bookings = false;
                            $manager = true;
                            $admin = false;
                            $login = false;
                            $register = false;
                            $logout = true;
                        } else if ($_SESSION["role"] === "customer") {
                            $nowshowing = true;
                            $bookings = true;
                            $manager = false;
                            $admin = false;
                            $login = false;
                            $register = false;
                            $logout = true;
                        } else if ($_SESSION["role"] === "admin") {
                            $nowshowing = true;
                            $bookings = false;
                            $manager = false;
                            $admin = true;
                            $login = false;
                            $register = false;
                            $logout = true;
                        }
                    } else {
                        $nowshowing = true;
                        $bookings = false;
                        $manager = false;
                        $admin = false;
                        $login = true;
                        $register = true;
                        $logout = false;
                    }

                    if ($nowshowing) {
                        echo '<li><a href="/cinema-website/index.php">Now Showing</a></li>';
                    }
                    if ($bookings) {
                        echo '<li><a href="/cinema-website/customer/bookings.php">Bookings</a></li>';
                    }
                    if ($manager) {
                        echo '<li><a href="/cinema-website/manager/manager.php">Manager</a></li>';
                    }
                    if ($admin) {
                        echo '<li><a href="/cinema-website/admin/admin.php">Admin</a></li>';
                    }
                    if ($login) {
                        echo '<li><a href="/cinema-website/auth/login.php" class="btn-login">Login</a></li>';
                    }
                    if ($register) {
                        echo '<li><a href="/cinema-website/auth/register.php" class="btn-login">Register</a></li>';
                    }
                    if ($logout) {
                        echo '<li><a href="/cinema-website/auth/logout.php" class="btn-login">Logout</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>