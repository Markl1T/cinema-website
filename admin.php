<?php
include("includes/header.php");
?>
<main class="manager-page">
    <div class="container">
        <h2 class="section-title">Admin Panel</h2>

        <div class="manager-container">
            <div class="manager-header">
                <h3>System Administration</h3>
                <button class="btn-primary">Add New Manager</button>
            </div>
            <div class="manager-content active" id="users-content">
                <table class="manager-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registration Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>2025-01-15</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-edit">Edit</button>
                                    <button class="btn-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Admin User</td>
                            <td>admin@starcinema.com</td>
                            <td>2024-12-01</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-edit">Edit</button>
                                    <button class="btn-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>2025-02-10</td>
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
<?php
include("includes/footer.php");
?>