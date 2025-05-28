<?php
include("includes/header.php");
?>

<main class="error-page">
    <div class="container">
        <div class="error-content">
            <div class="error-visual">
                <div class="film-strip">
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                </div>
                <div class="error-number">404</div>
                <div class="film-strip">
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                    <div class="film-hole"></div>
                </div>
            </div>
            
            <div class="error-text">
                <h1>Scene Not Found</h1>
                <p>Looks like this page has been cut from the final edit. The page you're looking for doesn't exist or has been moved to another location.</p>
                
                <div class="error-suggestions">
                    <h3>What you can do:</h3>
                    <ul>
                        <li>Check the URL for any typos</li>
                        <li>Go back to the previous page</li>
                        <li>Visit our homepage to find what you're looking for</li>
                        <li>Browse our current movie listings</li>
                    </ul>
                </div>
                
                <div class="error-actions">
                    <a href="index.html" class="btn-primary">Back to Home</a>
                    <a href="javascript:history.back()" class="btn-secondary">Go Back</a>
                </div>
            </div>
        </div>
        
        <div class="popular-movies">
            <h3>Popular Movies Right Now</h3>
            <div class="quick-movies">
                <div class="quick-movie">
                    <img src="/placeholder.svg?height=120&width=80" alt="Interstellar">
                    <div class="quick-movie-info">
                        <h4>Interstellar</h4>
                        <p>Sci-Fi, Adventure</p>
                        <a href="movie-details.php?id=1" class="quick-link">View Details</a>
                    </div>
                </div>
                <div class="quick-movie">
                    <img src="/placeholder.svg?height=120&width=80" alt="The Dark Knight">
                    <div class="quick-movie-info">
                        <h4>The Dark Knight</h4>
                        <p>Action, Crime, Drama</p>
                        <a href="movie-details.php?id=2" class="quick-link">View Details</a>
                    </div>
                </div>
                <div class="quick-movie">
                    <img src="/placeholder.svg?height=120&width=80" alt="Inception">
                    <div class="quick-movie-info">
                        <h4>Inception</h4>
                        <p>Action, Adventure, Sci-Fi</p>
                        <a href="movie-details.php?id=3" class="quick-link">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("includes/footer.php");
?>