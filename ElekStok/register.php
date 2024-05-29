<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="registration-form">
        <h2>Registrasi Akun</h2>
        <form action="register_function.php" method="post">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="uname" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required>
            
            <label for="reenter-password">Re-enter Password:</label>
            <input type="password" id="reenter-password" name="reenter-pass" required>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
