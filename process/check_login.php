<?php
    session_start();
    require_once ("config.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tb_administrator";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row["username"] == $username && $row["password"] == $password) {
            $_SESSION["status_login"] = "success";
            echo "<script>window.location = '../admin/main.php';</script>";
//            echo "found";
//            exit(0);
        }
    }

//    $conn->close();
    echo "<script>window.location='../admin/login.php';</script>";

?>