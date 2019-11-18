<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width", initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible content" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>PHP веб сайт</title>
</head>
<?php  require "blocks/header.php"?>
        <div class="container mt-5">
    <H3>Контактная форма</H3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
        <textarea name="message" class="form-control"
        placeholder="Введите ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </div>
    </form>
<?php  require "blocks/footer.php"?>
</body>
</html>