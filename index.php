<?php
$siteTitle = "Освітній Інформаційний Портал";
$hello = "Hello world";

$navItems = ["Головна", "Статті", "Дослідження", "Контакти"];
$globalElements = ["header", "nav", "main", "aside", "footer"];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?php echo $siteTitle; ?></h1>
    <p><?php echo $hello; ?></p>
</header>

<nav>
    <ul>
        <?php foreach ($navItems as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>
</nav>

<main>
    <h2>Глобальні елементи</h2>
    <ul>
        <?php foreach ($globalElements as $element): ?>
            <li><?php echo $element; ?></li>
        <?php endforeach; ?>
    </ul>
</main>

</body>
</html>