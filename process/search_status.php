<?php
    session_start();
    $status = $_POST["status"];
    $_SESSION["search_status"] = $status;
    header("location: ../result_status.php");
?>
