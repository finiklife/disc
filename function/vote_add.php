<?php
include_once ('connect_bd.php');
if (isset($_POST['btn_add_vote'])) {

    echo '<pre>';
    echo $_POST['vote_header'];
    echo '<br>';
    echo $_POST['vote_date_begin'];
    echo '<br>';
    echo $_POST['vote_date_over'];
    echo '<br>';
    echo $_POST['vote_text'];
    echo '</pre>';

    mysqli_query($link, "INSERT INTO votes SET date_begin='" . $_POST['vote_date_begin'] . "', date_over='" . $_POST['vote_date_over'] . "', header='".$_POST['vote_header']."', text='".$_POST['vote_text']."', ID_house='".$_SESSION['ID_house']."'");

}
?>
