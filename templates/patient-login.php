<?php
/**
 * Template Name: Patient Login
 */

// Simple login form
?>
<div class="login-form">
    <h2>Patient Login</h2>
    <?php if (isset($_GET['login_error'])) : ?>
        <p class="error" style="color: red;">Invalid email or password. Please try again.</p>
    <?php endif; ?>
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="patient_login">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
</div>
