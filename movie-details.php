<?php
require("includes/header.php")
?>
<main class="movie-details-page">
    <div class="container">
        <div class="movie-details">
            <div class="movie-poster-large">
                <img src="/placeholder.svg?height=600&width=400" alt="Interstellar">
            </div>
            <div class="movie-info-detailed">
                <h1>Interstellar</h1>
                <div class="movie-meta">
                    <span class="movie-rating">PG-13</span>
                    <span class="movie-genre">Sci-Fi, Adventure</span>
                    <span class="movie-duration">169 min</span>
                    <span class="movie-release">2014</span>
                </div>
                <div class="movie-director">
                    <strong>Director:</strong> Christopher Nolan
                </div>
                <div class="movie-cast">
                    <strong>Cast:</strong> Matthew McConaughey, Anne Hathaway, Jessica Chastain
                </div>
                <div class="movie-description">
                    <p>A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.</p>
                    <p>In Earth's future, a global crop blight and second Dust Bowl are slowly rendering the planet uninhabitable. Professor Brand (Michael Caine), a brilliant NASA physicist, is working on plans to save mankind by transporting Earth's population to a new home via a wormhole. But first, Brand must send former NASA pilot Cooper (Matthew McConaughey) and a team of researchers through the wormhole and across the galaxy to find out which of three planets could be mankind's new home.</p>
                </div>
                <div class="movie-trailer">
                    <h3>Trailer</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zSWdZVtXT7E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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