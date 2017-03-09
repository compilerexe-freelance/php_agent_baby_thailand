<?php
    session_start();
    if ($_SESSION["status_login"] != "success") {
        echo "<script>window.location='../admin/login.php';</script>";
    }
?>