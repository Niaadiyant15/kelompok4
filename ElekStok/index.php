<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error'];?>
            </p>
        <?php } ?>

        <form action="login_function.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="uname" name="uname" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required>
            
            <div class="remember-me">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            
            <button type="submit">Login</button>
        </form>
        <div class="extra-links">
            <p>Belum punya akun? <a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>
