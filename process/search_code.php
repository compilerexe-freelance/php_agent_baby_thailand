<?php
    session_start();
    include("config.php");

    $agent_code = $_POST["agent_code"];

    $sql = "SELECT * FROM tb_user WHERE code = '$agent_code'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["status"] = "found";
    } else {
        $_SESSION["status"] = "not found";
    }

    header("location: ../check_agent.php");

?>
