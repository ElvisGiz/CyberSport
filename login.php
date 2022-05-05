<?php
require "header.php";


$link = mysqli_connect("localhost", "mysql", "", "cyber");

if ($link == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    mysqli_set_charset($link, "utf8");
    $sql = 'INSERT INTO user ("name") VALUES ("test")';
    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }
}

require "footer.php";
