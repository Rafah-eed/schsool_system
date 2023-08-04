<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login">
    <h1>Register</h1>
    <form action="register_complete.php" method="post">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="login" placeholder="Username" id="login" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="pass" placeholder="Password" id="pass" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="v_pass" placeholder="Confirm Password" id="v_pass" required>
        <input type="submit" value="register">
    </form>
</div>
</body>
</html>