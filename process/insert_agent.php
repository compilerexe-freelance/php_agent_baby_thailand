<?php
    include "config.php";

    $code = "Baby" . $_POST["code"];
    $full_name = $_POST["full_name"];
    $line = $_POST["line"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $tel = $_POST["tel"];
    $province_name = $_POST["province_name"];
    $position = $_POST["position"];
    $status = $_POST["status"];

    // ===== Image Upload =====
    $target_dir = "../assets/uploads/cards/";
    $target_file = $target_dir . basename($_FILES["card"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["card"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Allow certain file formats
    // if($imageFileType != "jpg") {
    //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        $target_file = $target_dir . $code . "." . $imageFileType;
        if (move_uploaded_file($_FILES["card"]["tmp_name"], $target_file)) {
            $file_card = $code . "." . $imageFileType;
            // echo "The file ". basename( $_FILES["card"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // ========================

    $sql = "INSERT INTO tb_user
            (code, full_name, tel, province_name, position, image)
            VALUES ('$code', '$full_name', '$tel', '$province_name', '$position', '$file_card')";
    $conn->query($sql);

    $user_id = $conn->insert_id;
    $sql = "INSERT INTO tb_social
            (user_id, line, facebook, instagram)
            VALUES ('$user_id', '$line', '$facebook', '$instagram')";
    $conn->query($sql);
    $sql = "INSERT INTO tb_status
            (user_id, status)
            VALUES ('$user_id', '$status')";
    $conn->query($sql);

    $conn->close();

    header("location: ../admin/view_agent.php");

?>
