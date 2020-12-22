<?php

    require_once '../config/connect.php';

    $id = $_GET['id'];
    mysqli_query($link, $query=("DELETE FROM `news` WHERE `news`.`id` = '$id'"));
    
    header('location:/index.php');

?>