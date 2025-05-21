<?php
include("includes/header.php");
?>

<body>
    <div class="container">
        <h2 class="section-title">Movie Manager</h2>

        <div class="manager-container">
            <div class="manager-header">
                <h3>Content Management</h3>
                <div>
                    <a href="add-movie.php" class="btn-primary">Add New Movie</a>
                    <a href="add-screening.php" class="btn-primary">Add New Screening</a>
                </div>

            </div>

            <div class="manager-tabs">
                <button class="manager-tab active" data-tab="movies">Movies</button>
                <button class="manager-tab" data-tab="screenings">Screenings</button>
            </div>

            <div class="manager-content active" id="movies-content">
                <table class="manager-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("includes/connect-db.php");
                        $movies = $conn->execute_query("SELECT * FROM movies ORDER BY start_date");
                        if ($movies->num_rows > 0) {
                            while ($movie = $movies->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $movie['title'] . '</td>';
                                echo '<td>' . $movie['genre'] .'</td>';
                                echo '<td>'. $movie['duration'] .'</td>';
                                echo '<td>'. date("F j", strtotime($movie['start_date'])) .'</td>';
                                echo '<td>';
                                echo '<div class="action-buttons">';
                                echo '<button class="btn-edit">Edit</button>';
                                echo '<button class="btn-delete">Delete</button>';
                                echo '</div>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo "<p>No movies found.</p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="manager-content" id="screenings-content">
                <table class="manager-table">
                    <thead>
                        <tr>
                            <th>Movie</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Theater</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $screenings = $conn->execute_query("SELECT * FROM screenings s JOIN movies m ON s.movie_id = m.movie_id ORDER BY date, time");
                        if ($screenings->num_rows > 0) {
                            while ($screening = $screenings->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $screening['title'] . '</td>';
                                echo '<td>' . date("F j", strtotime($screening['date'])) .'</td>';
                                echo '<td>'. date("H:i", strtotime($screening['time'])) .'</td>';
                                echo '<td>'. $screening['theater_id'] .'</td>';
                                echo '<td>';
                                echo '<div class="action-buttons">';
                                echo '<button class="btn-edit">Edit</button>';
                                echo '<button class="btn-delete">Delete</button>';
                                echo '</div>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo "<p>No screenings found.</p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.manager-tab');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));

                    // Add active class to clicked tab
                    this.classList.add('active');

                    // Hide all content
                    const contents = document.querySelectorAll('.manager-content');
                    contents.forEach(content => content.classList.remove('active'));

                    // Show corresponding content
                    const tabName = this.getAttribute('data-tab');
                    document.getElementById(tabName + '-content').classList.add('active');
                });
            });
        });
    </script>
    <?php
    include("includes/footer.php");
    ?>