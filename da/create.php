<?php
    require_once '../config/connect.php';
    $news_name = $_POST['news_name'];
    $brief_des = $_POST['brief_des'];
    $con_news_full = $_POST['con_news_full'];
    $date = $_POST['date'];

    mysqli_query($link, $query=("INSERT INTO `news` (`id`, `news_name`, `brief_des`,`con_news_full`, `date`) VALUES (NULL, '$news_name', '$brief_des', '$con_news_full', '$date')"));
    header('location:/index.php');
?>