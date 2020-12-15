<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("User.php")    
    ?>

    <form action="insertIntoStudents.php" method="post">
        <label>Ім'я</label><input name="first_name" type="text"><br>
        <label>Прізвище</label><input name="last_name" type="text"><br>
		<label>Банківська карта</label><input name="bank_card" type="int"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
