<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script type="application/javascript" src="../public/javascript/script.js"></script>
</head>
<body>
    <h1>Sign In</h1>
    <form action="/sign-in" method="post" onsubmit="validateSignInFields(event);">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" value="Sign In">
    </form>
    <br>
    <a href="/sign-up">Sign Up</a>
</body>
</html>