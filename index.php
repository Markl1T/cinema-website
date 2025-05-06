<?php
require("includes/header.php")
?>
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h2>Experience Movies Like Never Before</h2>
        <p>Immerse yourself in the ultimate cinematic experience with state-of-the-art technology and premium comfort.</p>
        <a href="#now-showing" class="btn-primary">View Movies</a>
    </div>
</section>

<main>
    <section id="now-showing" class="now-showing">
        <div class="container">
            <h2 class="section-title">Now Showing</h2>
            <div class="movies-grid">
                <!-- Movie 1 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="Interstellar">
                        </div>
                        <div class="movie-info">
                            <h3>Interstellar</h3>
                            <span class="movie-genre">Sci-Fi, Adventure</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 169 min</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                                <a href="seat-selection.php" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 2 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="The Dark Knight">
                        </div>
                        <div class="movie-info">
                            <h3>The Dark Knight</h3>
                            <span class="movie-genre">Action, Crime, Drama</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 152 min</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                                <a href="seat-selection.php" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 3 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="Inception">
                        </div>
                        <div class="movie-info">
                            <h3>Inception</h3>
                            <span class="movie-genre">Action, Adventure, Sci-Fi</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 148 min</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                                <a href="seat-selection.php" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 4 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="The Matrix">
                        </div>
                        <div class="movie-info">
                            <h3>The Matrix</h3>
                            <span class="movie-genre">Action, Sci-Fi</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 136 min</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                                <a href="seat-selection.php" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <div class="feature-icon">🎬</div>
                <h3>Latest Releases</h3>
                <p>Be the first to watch the newest blockbusters with our early screenings and premieres.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🍿</div>
                <h3>Concessions</h3>
                <p>Enjoy premium snacks and beverages from our extensive menu while watching your favorite movies.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🎞️</div>
                <h3>IMAX Experience</h3>
                <p>Immerse yourself in the ultimate cinematic experience with our state-of-the-art IMAX theaters.</p>
            </div>
        </div>
    </section>
</main>

<?php
require("includes/footer.php");
?>