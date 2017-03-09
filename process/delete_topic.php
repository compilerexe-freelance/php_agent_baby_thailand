<?php

    require_once ("config.php");

    $topic_id = $_GET["id"];
    $sql = "DELETE FROM tb_topic WHERE id = $topic_id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_topic.php';</script>";

?>