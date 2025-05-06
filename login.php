<?php
require("includes/header.php")
?>
<main class="login-page">
    <div class="container">
        <div class="auth-container">
            <div class="auth-content">
                <form id="login-form" class="auth-form active">
                    <h2>Welcome Back</h2>
                    <p>Sign in to access your account and manage your bookings.</p>

                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" required>
                    </div>

                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" required>
                    </div>

                    <button type="submit" class="btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require("includes/footer.php");
?>