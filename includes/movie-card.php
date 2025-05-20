<div class="movie-card">
    <div class="movie-poster">
        <a href="movie-details.php?id=<?php echo htmlspecialchars($movie['movie_id']); ?>" class="movie-card-link">
            <img src="<?php echo $movie['poster']?>" alt="<?php echo htmlspecialchars($movie['title']); ?>">
        </a>
    </div>
    <div class="movie-info">
        <h3><?php echo htmlspecialchars($movie['title']); ?></h3>
        <span class="movie-genre"><?php echo htmlspecialchars($movie['genre']); ?></span>
        <div class="movie-meta">
            <span><span class="icon-time">⏱</span> <?php echo htmlspecialchars($movie['duration']); ?> min</span>
            <?php 
                if ($movie['start_date'] > $today) {
                    $start_date = date("F j", strtotime($movie['start_date']));
                    echo "<span>" . $start_date . "</span>";
                }
            ?>
        </div>
        <div class="card-buttons">
            <a href="movie-details.php?id=<?php echo htmlspecialchars($movie['movie_id']); ?>" class="btn-details">View Details</a>
            <?php 
                if ($movie['start_date'] < $today) {
                    echo '<a href="seat-selection.php?movie_id=' . htmlspecialchars($movie['movie_id']) . '" class="btn-book">Book Now</a>';
                }
            ?>
        </div>
    </div>
</div>
