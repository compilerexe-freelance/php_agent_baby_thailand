<?php
//    require_once ("config.php");

    if ($_FILES["banner_1"]["name"] != "") {
        $target_dir = "../assets/images/banner/";
        $target_file = $target_dir . basename($_FILES["banner_1"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["banner_1"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            $target_file = $target_dir . "banner_1." . $imageFileType;
            if (move_uploaded_file($_FILES["banner_1"]["tmp_name"], $target_file)) {
                $banner_1 = "banner_1." . $imageFileType;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
//        $sql = "UPDATE tb_banner
//            SET banner_1 = '$banner_1'
//            WHERE id = 1";
//        $conn->query($sql);
    }

    if ($_FILES["banner_2"]["name"] != "") {
        $target_dir = "../assets/images/banner/";
        $target_file = $target_dir . basename($_FILES["banner_2"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["banner_2"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            $target_file = $target_dir . "banner_2." . $imageFileType;
            if (move_uploaded_file($_FILES["banner_2"]["tmp_name"], $target_file)) {
                $banner_2 = "banner_2." . $imageFileType;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
//        $sql = "UPDATE tb_banner
//            SET banner_2 = '$banner_2'
//            WHERE id = 1";
//        $conn->query($sql);
    }

    if ($_FILES["banner_3"]["name"] != "") {
        $target_dir = "../assets/images/banner/";
        $target_file = $target_dir . basename($_FILES["banner_3"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["banner_3"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            $target_file = $target_dir . "banner_3." . $imageFileType;
            if (move_uploaded_file($_FILES["banner_3"]["tmp_name"], $target_file)) {
                $banner_3 = "banner_3." . $imageFileType;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
//        $sql = "UPDATE tb_banner
//            SET banner_3 = '$banner_3'
//            WHERE id = 1";
//        $conn->query($sql);
    }


    echo "<script>window.location = '../admin/update_banner.php';</script>";

?>