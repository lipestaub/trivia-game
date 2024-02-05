<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>

    <script type="application/javascript" src="../public/javascript/script.js"></script>
</head>
<body>
    <h1>Game (Question 1/5)</h1>
    <h2>Felipe's Turn</h2>
    <h3>Which of the following passenger jets is the longest?</h3>
    <form action="/save-answer" method="post">
        <label><input type="radio" name="answer" id="answer" value="Boeing 747-8"> Boeing 747-8</label><br>
        <label><input type="radio" name="answer" id="answer" value="Airbus A350-1000"> Airbus A350-1000</label><br>
        <label><input type="radio" name="answer" id="answer" value="Airbus A330-200"> Airbus A330-200</label><br>
        <label><input type="radio" name="answer" id="answer" value="Boeing 787-10"> Boeing 787-10</label><br>
        <input type="hidden" name="question_id" id="question_id" value="1">
        <br>
        <input type="submit" value="Save Answer" onclick="validateGameFields">
    </form>
</body>
</html>