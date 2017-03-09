<?php

    require_once ("config.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM tb_administrator WHERE id = $id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_admin.php';</script>";

?>