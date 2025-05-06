<?php
include("includes/header.php");
?>
<body>
    <main class="manager-page">
        <div class="container">
            <h2 class="section-title">Movie Manager</h2>

            <div class="manager-container">
                <div class="manager-header">
                    <h3>Content Management</h3>
                    <button class="btn-primary">Add New Movie</button>
                </div>

                <div class="manager-tabs">
                    <button class="manager-tab active" data-tab="movies">Movies</button>
                    <button class="manager-tab" data-tab="screenings">Screenings</button>
                </div>

                <div class="manager-content active" id="movies-content">
                    <table class="manager-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Interstellar</td>
                                <td>Sci-Fi, Adventure</td>
                                <td>169 min</td>
                                <td>Now Showing</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>The Dark Knight</td>
                                <td>Action, Crime, Drama</td>
                                <td>152 min</td>
                                <td>Now Showing</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Inception</td>
                                <td>Action, Adventure, Sci-Fi</td>
                                <td>148 min</td>
                                <td>Now Showing</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>The Matrix</td>
                                <td>Action, Sci-Fi</td>
                                <td>136 min</td>
                                <td>Now Showing</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="manager-content" id="screenings-content">
                    <table class="manager-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Movie</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Theater</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Interstellar</td>
                                <td>2025-05-01</td>
                                <td>18:30</td>
                                <td>Theater 1</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>The Dark Knight</td>
                                <td>2025-05-01</td>
                                <td>20:00</td>
                                <td>Theater 2</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit">Edit</button>
                                        <button class="btn-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
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