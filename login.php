<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="authenticate.php" method="post">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="login" placeholder="Username" id="login" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="pass" placeholder="Password" id="pass" required>
        <input type="submit" value="login">
    </form>
</div>
</body>
</html>