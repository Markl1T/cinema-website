<?php
    session_start();

    // Check tokens
    if (isset($_SESSION["email"]) && isset($_SESSION["password"]) && isset($_SESSION["role"])) {
        // Unset session variables
        unset($_SESSION["email"]);
        unset($_SESSION["password"]);
        unset($_SESSION["role"]);
        // Destroy the session
        session_destroy();
    }

    // Redirect to index.php
    header("Location: index.php");
    // Clear session variables
?>