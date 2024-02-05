<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <script type="application/javascript" src="../public/javascript/script.js"></script>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="/sign-up" method="post">
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
        <label for="confirm_password">Confirm Password</label>
        <br>
        <input type="password" name="confirm_password" id="confirm_password">
        <br>
        <br>
        <input type="submit" value="Sign Up" onclick="validateSignUpFields();">
    </form>
    <br>
</body>
</html>