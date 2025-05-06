<?php
include("includes/header.php");
?>
<main>
    <section id="coming-soon" class="coming-soon">
        <div class="container">
            <h2 class="section-title">Coming Soon</h2>
            <div class="movies-grid">
                <!-- Movie 1 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="Dune: Part Two">
                        </div>
                        <div class="movie-info">
                            <h3>Dune: Part Two</h3>
                            <span class="movie-genre">Sci-Fi, Adventure</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 165 min</span>
                                <span>Release: May 15</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 2 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="The Batman 2">
                        </div>
                        <div class="movie-info">
                            <h3>The Batman 2</h3>
                            <span class="movie-genre">Action, Crime, Drama</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 150 min</span>
                                <span>Release: June 10</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 3 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="Avatar 3">
                        </div>
                        <div class="movie-info">
                            <h3>Avatar 3</h3>
                            <span class="movie-genre">Action, Adventure, Sci-Fi</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 180 min</span>
                                <span>Release: July 5</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Movie 4 -->
                <div class="movie-card">
                    <a href="movie-details.php" class="movie-card-link">
                        <div class="movie-poster">
                            <img src="/placeholder.svg?height=400&width=300" alt="Mission: Impossible 8">
                        </div>
                        <div class="movie-info">
                            <h3>Mission: Impossible 8</h3>
                            <span class="movie-genre">Action, Adventure, Thriller</span>
                            <div class="movie-meta">
                                <span><span class="icon-time">⏱</span> 155 min</span>
                                <span>Release: August 20</span>
                            </div>
                            <div class="card-buttons">
                                <a href="movie-details.php" class="btn-details">View Details</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include("includes/footer.php");
?>