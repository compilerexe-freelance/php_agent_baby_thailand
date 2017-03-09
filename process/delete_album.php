<?php

    require_once ("config.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM tb_album WHERE id = $id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_album.php';</script>";

?>