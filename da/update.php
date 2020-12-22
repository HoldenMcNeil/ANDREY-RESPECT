<?php
    require_once '../config/connect.php';

    $id = $_POST['id'];
    $news_name = $_POST['news_name'];
    $brief_des = $_POST['brief_des'];
    $con_news_full = $_POST['con_news_full'];
    $date = $_POST['date'];

    mysqli_query($link, $query=("UPDATE `news` SET `news_name` = '$news_name', `brief_des` = '$brief_des', `con_news_full` = '$con_news_full', `date` = '$date' WHERE `news`.`id` = '$id'
    "));
    
    header('location:/index.php');
?>
