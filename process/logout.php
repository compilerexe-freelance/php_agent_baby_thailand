<?php
    session_start();
    session_destroy();
    echo "<script>window.location='../admin/login.php';</script>";
?>