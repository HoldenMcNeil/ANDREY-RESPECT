<?php
    require_once 'config/connect.php';

    $news_id = $_GET['id'];
    $news = mysqli_query($link, $query=("SELECT * FROM `news` WHERE `id` = '$news_id'"));
    $news = mysqli_fetch_assoc($news);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить новость</title>
    <style>
        form {
            border: solid black 1px;
            width: 250px;
            text-align: center;
            background: gainsboro;
        }
    </style>
</head>
<body>
    <h3>Форма для обновления новостей</h3>
    <form action="da/update.php" method="post">
        <input type="hidden" name="id" value="<?= $news['id'] ?>">
        <p>Название новости</p>
        <input type= "text" name= "news_name" value="<?= $news['news_name'] ?>">
        <p>Краткое описание</p>
        <input type= "text" name= "brief_des" value="<?= $news['brief_des'] ?>">
        <p>Полное описание</p>
        <textarea name= "con_news_full"><?= $news['con_news_full'] ?></textarea>
        <p>Дата</p>
        <input type= "number" name= "date" value="<?= $news['date'] ?>"> <br> <br>
        <button type="submit">Обновить</button>
    </form>
</body>
</html>