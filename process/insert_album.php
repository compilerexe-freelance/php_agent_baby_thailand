<?php
    require_once ("config.php");

    $title_album = $_POST["title_album"];

    $sql_name = "";
    $sql_picture = "";

    if (!is_dir('../assets/uploads/albums/'.$title_album)) {
        mkdir('../assets/uploads/albums/'.$title_album, 0777, true);
        $target_dir = "../assets/uploads/albums/".$title_album."/";

        for ($i = 1; $i <= 15; $i++) {
            if ($_FILES["picture_".$i]["name"] != "") {
                $target_file = $target_dir . basename($_FILES["picture_".$i]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["picture_".$i]["tmp_name"]);
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
                    $target_file = $target_dir . "image_".$i.".". $imageFileType;
                    if (move_uploaded_file($_FILES["picture_".$i]["tmp_name"], $target_file)) {
                        $file_image = "image_". $i . "." . $imageFileType;
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }

                $sql_name = $sql_name . "image_" . $i . ",";
                $sql_picture = $sql_picture . "'".$file_image."',";
            }
        }

    }

    $sql_name = (substr($sql_name,-1) == ',') ? substr($sql_name, 0, -1) : $sql_name;
    $sql_picture = (substr($sql_picture,-1) == ',') ? substr($sql_picture, 0, -1) : $sql_picture;

    $debug = "INSERT INTO tb_album (title_album, ". $sql_name .") VALUES ('$title_album', ".$sql_picture.")";

    $conn->query("INSERT INTO tb_album (title_album, ". $sql_name .") VALUES ('$title_album', ".$sql_picture.")");

    echo "<script>window.location = '../admin/manage_album.php'</script>";

?>