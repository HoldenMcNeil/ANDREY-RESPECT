<?php
    require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td{
            padding: 10px;
        }
        th {
            background: grey;
            color: white;
        }
        td {
            background: gainsboro;
        }
        form {
            border: solid black 1px;
            width: 250px;
            text-align: center;
            background: gainsboro;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>News_name</th>
            <th>brief_des</th>
            <th>con_news_full</th>
            <th>date</th>
        </tr>
        <?php
                $news = mysqli_query($link, $query=("SELECT * FROM `news`"));
                $news = mysqli_fetch_all($news);
                foreach ($news as $news){
                    ?>
                    <tr>
                        <td><?=$news[0]?></td>
                        <td><?=$news[1]?></td>
                        <td><?=$news[2]?></td>
                        <td><?=$news[3]?></td>
                        <td><?=$news[4]?></td>
                        <td><a href= "update.php?id=<?=$news[0]?>">Обновить</a></td>
                        <td><a href= "da/delete.php?id=<?=$news[0]?>">Удалить</a></td>
                    </tr>
                    <?php
                }
        ?>
    </table>
    <h3>Форма для добавление новостей</h3>
    <form action="da/create.php" method="post">
        <p>Название новости</p>
        <input type= "text" name= "news_name">
        <p>Краткое описание</p>
        <input type= "text" name= "brief_des">
        <p>Полное описание</p>
        <textarea name= "con_news_full"></textarea>
        <p>Дата</p>
        <input type= "number" name= "date"> <br> <br>
        <button type="submit">Добавить новость</button>
    </form>



    <form action="login.php" method="post">
    <button>Вход </button>
    </form>
    <button> </button>


    
</body>
</html>