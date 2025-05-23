<?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        require_once("includes/connect-db.php");
        $movie_id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM movies WHERE movie_id = ?");
        $stmt->bind_param("i", $movie_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            $movie = $result->fetch_assoc();
        } else {
            header("Location: index.php");
            exit();
        }
    }else{
        header("Location: index.php");
        exit();
    }    

?>

<?php
require("includes/header.php");
displayHeader(true, true, true);
?>
<main class="movie-details-page">
    <div class="container">
        <div class="movie-details">
            <div class="movie-poster-large">
                <img src="<?php echo htmlspecialchars($movie['poster']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>">
            </div>
            <div class="movie-info-detailed">
                <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
                <div class="movie-meta">
                    <span class="movie-rating"><?php echo htmlspecialchars($movie['rating']); ?></span>
                    <span class="movie-genre"><?php echo htmlspecialchars($movie['genre']); ?></span>
                    <span class="movie-duration"><?php echo htmlspecialchars($movie['duration']); ?> min</span>
                    <span class="movie-release"><?php echo htmlspecialchars($movie['release_year']); ?></span>
                </div>
                <div class="movie-director">
                    <strong>Director:</strong> <?php echo htmlspecialchars($movie['director']); ?>
                </div>
                <div class="movie-cast">
                    <strong>Cast:</strong> <?php echo htmlspecialchars($movie['cast']); ?>
                </div>
                <div class="movie-description">
                    <?php echo htmlspecialchars($movie['description']); ?>
                </div>
                <div class="movie-trailer">
                    <h3>Trailer</h3>
                    <iframe width="560" height="315" src="<?php echo htmlspecialchars($movie['trailer']); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="showtimes">
            <h2>Showtimes</h2>
            <div class="date-selector">
                <button class="date-btn active">Today</button>
                <button class="date-btn">Tomorrow</button>
                <button class="date-btn">Wed, May 1</button>
                <button class="date-btn">Thu, May 2</button>
                <button class="date-btn">Fri, May 3</button>
            </div>
            <div class="time-slots">
                <div class="time-slot">
                    <div class="time">10:30 AM</div>
                    <div class="screen">Screen 1</div>
                    <a href="seat-selection.php?time=10:30&screen=1" class="btn-book-time">Select Seats</a>
                </div>
                <div class="time-slot">
                    <div class="time">1:15 PM</div>
                    <div class="screen">Screen 2</div>
                    <a href="seat-selection.php?time=13:15&screen=2" class="btn-book-time">Select Seats</a>
                </div>
                <div class="time-slot">
                    <div class="time">4:00 PM</div>
                    <div class="screen">Screen 1</div>
                    <a href="seat-selection.php?time=16:00&screen=1" class="btn-book-time">Select Seats</a>
                </div>
                <div class="time-slot">
                    <div class="time">7:30 PM</div>
                    <div class="screen">Screen 3 (IMAX)</div>
                    <a href="seat-selection.php?time=19:30&screen=3" class="btn-book-time premium">Select Seats</a>
                </div>
                <div class="time-slot">
                    <div class="time">10:15 PM</div>
                    <div class="screen">Screen 2</div>
                    <a href="seat-selection.php?time=22:15&screen=2" class="btn-book-time">Select Seats</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require("includes/footer.php");
?>