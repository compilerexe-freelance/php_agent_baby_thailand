<?php

    require_once ("config.php");

    $topic_id = $_GET["id"];
    $topic_title = $_POST["topic_title"];
    $topic_detail = $_POST["topic_detail"];

    $sql = "UPDATE tb_topic SET topic_title = '$topic_title', topic_detail = '$topic_detail' WHERE id = $topic_id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_topic.php';</script>";

?>