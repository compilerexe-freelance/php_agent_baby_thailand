<?php
    session_start();
    $province = $_POST["province"];
    $_SESSION["search_province"] = $province;
    header("location: ../result_province.php");
?>