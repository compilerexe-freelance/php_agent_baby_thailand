<?php
    include "config.php";

    $user_id = $_GET["id"];
    $code = $_POST["code"];
    $full_name = $_POST["full_name"];
    $line = $_POST["line"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $tel = $_POST["tel"];
    $province_name = $_POST["province_name"];
    $position = $_POST["position"];
    $status = $_POST["status"];

    // ===== Image Upload =====
    if ($_FILES["card"]["name"] != "") {
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
        $sql = "UPDATE tb_user
                SET fullname = '$full_name',
                    tel = '$tel',
                    province_name = '$province_name',
                    position = '$position',
                    image = '$file_card'
                WHERE id = $user_id";
        $conn->query($sql);
    } else {
        $sql = "UPDATE tb_user
                SET fullname = '$full_name',
                    tel = '$tel',
                    province_name = '$province_name',
                    position = '$position'
                WHERE id = $user_id";
        $conn->query($sql);
    }
    // ========================

    $sql = "UPDATE tb_social
                SET line = '$line',
                    facebook = '$facebook',
                    instagram = '$instagram'
                WHERE user_id = $user_id";
    $conn->query($sql);

    $sql = "UPDATE tb_status
                SET status = '$status'
                WHERE user_id = $user_id";
    $conn->query($sql);

    $conn->close();

    echo "<script>window.location = '../admin/list_agent.php'; </script>";

?>
