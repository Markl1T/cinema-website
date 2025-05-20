<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "cinema";

$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>