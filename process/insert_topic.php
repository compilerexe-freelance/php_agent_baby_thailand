<?php

    require_once ("config.php");

    $topic_title = $_POST["topic_title"];
    $topic_detail = $_POST["topic_detail"];

    $sql = "INSERT INTO tb_topic (topic_title, topic_detail) VALUES('$topic_title', '$topic_detail')";
    $conn->query($sql);

    echo "<script>window.location = '../admin/manage_topic.php';</script>";

?>