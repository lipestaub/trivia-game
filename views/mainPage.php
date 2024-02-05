<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <script type="application/javascript" src="../public/javascript/script.js"></script>
</head>
<body>
    <h1>Main Page</h1>
    <form action="/game" method="post">
        <label for="number_of_players">Number of Players</label>
        <br>
        <select name="number_of_players" id="number_of_players">
            <option value="0">Select</option>
            <option value="1">1 player</option>
            <option value="2">2 players</option>
            <option value="3">3 players</option>
            <option value="4">4 players</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Start" onclick="validateMainPageFields();">
    </form>
</body>
</html>