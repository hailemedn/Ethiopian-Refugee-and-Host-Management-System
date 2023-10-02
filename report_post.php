<?php
    include('dbcon.php');
    $get_id = $_GET['id'];
    $conn->query("UPDATE post SET reports = reports + 1 WHERE post_id = $get_id");
    header('location:home.php');
?>
