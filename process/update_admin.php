<?php

    require_once ("config.php");

    $id = $_GET["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "UPDATE tb_administrator SET username = '$username', password = '$password' WHERE id = $id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_admin.php';</script>";

?>