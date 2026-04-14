<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Опитування</title>
</head>
<body>

<h2>Опитування</h2>

<form action="answers.php" method="POST">

    <p>1. Ваш вік:</p>
    <select name="age">
        <option value="under18">До 18</option>
        <option value="18-25">18-25</option>
        <option value="26+">26+</option>
    </select>

    <p>2. Ваша улюблена мова програмування:</p>
    <input type="radio" name="language" value="php"> PHP<br>
    <input type="radio" name="language" value="js"> JavaScript<br>
    <input type="radio" name="language" value="python"> Python<br>

    <p>3. Скільки годин на день програмуєте?</p>
    <input type="number" name="hours" min="0" max="24">

    <br><br>
    <input type="submit" value="Відправити">

</form>

</body>
</html>