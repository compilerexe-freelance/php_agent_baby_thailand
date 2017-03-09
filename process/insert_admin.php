<?php
    session_start();
    require_once ("config.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
//    $cf_password = $_POST["cf_password"];

//    if ($password != $cf_password) {
//        $_SESSION["status"] = "กรุณาตรวจสอบรหัสผ่านอีกครั้ง";
//        echo "<script>window.location = '../admin/insert_admin.php'</script>";
//    } else {

        // Check username
        $sql = "SELECT * FROM tb_administrator";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["username"] == $username) {
                $_SESSION["status"] = "ชื่อผู้ใช้งานนี้มีในระบบแล้ว";
                echo "<script>window.location = '../admin/insert_admin.php'</script>";
                exit(0);
            }
        }

        $sql = "INSERT INTO tb_administrator (username, password) VALUES('$username', '$password')";
        $conn->query($sql);
        echo "<script>window.location = '../admin/manage_admin.php';</script>";
//    }

?>