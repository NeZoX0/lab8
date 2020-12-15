<?php

$mysqli = new mysqli('localhost', 'root', '', 'program'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$first_name = $_POST['first_name']; $last_name = $_POST['last_name']; $bank_card = $_POST['bank_card'];

$sql = "INSERT INTO User (first_name, last_name, bank_card) VALUES ('$first_name', '$last_name','$bank_card' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("User.php")
?>
