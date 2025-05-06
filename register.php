<?php
require("includes/header.php")
?>
<main class="login-page">
    <div class="container">
        <div class="auth-container">
            <div class="auth-content">
                <form id="register-form" class="auth-form active">
                    <h2>Create an Account</h2>
                    <p>Join Star Cinema to book tickets, earn rewards, and more.</p>

                    <div class="form-group">
                        <label for="register-name">Full Name</label>
                        <input type="text" id="register-name" required>
                    </div>

                    <div class="form-group">
                        <label for="register-email">Email</label>
                        <input type="email" id="register-email" required>
                    </div>

                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" id="register-password" required>
                    </div>

                    <div class="form-group">
                        <label for="register-confirm-password">Confirm Password</label>
                        <input type="password" id="register-confirm-password" required>
                    </div>
                    
                    <button type="submit" class="btn-primary">Create Account</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require("includes/footer.php");
?>