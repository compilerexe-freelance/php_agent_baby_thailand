<?php

    require_once ("config.php");
    $user_id = $_GET["id"];

    $sql = "DELETE FROM tb_status WHERE user_id = $user_id";
    $conn->query($sql);
    $sql = "DELETE FROM tb_social WHERE user_id = $user_id";
    $conn->query($sql);
    $sql = "DELETE FROM tb_user WHERE id = $user_id";
    $conn->query($sql);

    echo "<script>window.location = '../admin/list_agent.php'; </script>";

?>