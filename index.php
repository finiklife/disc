<?php
include_once('function/connect_bd.php');
//include_once ('header.php');
//include_once('blocks/disc_list.php');
//include_once ('footer.php');
//include_once ('blocks/sign_IN.php');

$id_page = mysqli_query($link, "SELECT * FROM `pages`");

if ($_SESSION['ID'] != 0) {
    $id_user = mysqli_query($link, "SELECT * FROM `users` WHERE ID_user='" . $_SESSION['ID'] . "'");
    $user_link = mysqli_fetch_array($id_user, MYSQLI_ASSOC);
    include('header.php');
    /*    $file = basename($_SERVER['PHP_SELF'], ".php");
        echo $_SERVER['HTTP_HOST']."<br>".$_SERVER['REQUEST_URI']."<br>".$file;*/


    if (isset($_REQUEST["page"]))
        include($_REQUEST["page"] . ".php");
    else
        include_once("blocks/disc_list.php");
} else {
    include('blocks/sign_IN.php');
}