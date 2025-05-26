<?php
include ("includes/connect-db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['movie_id']) && is_numeric($_POST['movie_id'])) {
        $id = $_POST['movie_id'];

        $stmt = $conn->prepare("DELETE FROM movies WHERE movie_id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Movie deleted successfully.";
        } else {
            echo "Error deleting movie: " . $stmt->error;
        }

        $stmt->close();
        header("Location: manager.php");
        exit();
    } else {
        echo "Invalid movie ID.";
    }
} else {
    echo "Invalid request method.";
}
?>
