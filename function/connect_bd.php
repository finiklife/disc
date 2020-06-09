<?php
include('data.php');
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
mysqli_query($link, "SET NAMES utf8;");
?>