<?php

$age = $_POST['age'] ?? '';
$language = $_POST['language'] ?? '';
$hours = $_POST['hours'] ?? 0;

function checkAge($age) {
    return match($age) {
        'under18' => "Ви ще дуже молоді 😊",
        '18-25' => "Ідеальний час для розвитку 🚀",
        '26+' => "Чудово, досвід має значення 👍",
        default => "Невідомий вік"
    };
}

function checkLanguage($language) {
    switch ($language) {
        case 'php':
            return "Ви обрали PHP 🐘";
        case 'js':
            return "JavaScript — це сила 🌐";
        case 'python':
            return "Python дуже популярний 🐍";
        default:
            return "Мова не обрана";
    }
}

function checkHours($hours) {

    if ($hours <= 0) {
        return "Ви не програмуєте 😢";
    } elseif ($hours <= 3) {
        return "Непогано, але можна більше 😉";
    } elseif ($hours <= 6) {
        return "Гарний рівень 💪";
    } else {
        $msg = "Ви справжній програміст 🔥<br>";
        $msg .= "Ваша мотивація:<br>";

        // цикл
        for ($i = 0; $i < $hours; $i++) {
            $msg .= "💻 ";
        }

        return $msg;
    }
}

echo "<h2>Результати:</h2>";

echo "<p>" . checkAge($age) . "</p>";
echo "<p>" . checkLanguage($language) . "</p>";
echo "<p>" . checkHours($hours) . "</p>";

?>