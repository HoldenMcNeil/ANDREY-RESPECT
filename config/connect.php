<?php
    $link = mysqli_connect ('127.0.0.1','root','root','diplom');

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
?>