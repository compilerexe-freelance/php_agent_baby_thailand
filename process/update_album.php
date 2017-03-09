<?php
    require_once ("config.php");

    $album_id = $_GET["id"];

    $new_title_album = $_POST["title_album"];
    $old_title_album = $_POST["old_title_album"];

    $sql_name = "";
    $sql_picture = "";

    if ($old_title_album != $new_title_album) {
//        echo "1";
//        exit(0);
        rename("../assets/uploads/albums/".$old_title_album, "../assets/uploads/albums/".$new_title_album);
        $conn->query("UPDATE tb_album SET title_album = '$new_title_album' WHERE id = $album_id");
    } else {
//        echo "2";
//        exit(0);
        $target_dir = "../assets/uploads/albums/".$old_title_album."/";
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

//            $sql_name = $sql_name . "image_" . $i . ",";
                $sql_picture = $sql_picture . "image_" . $i . "='".$file_image."',";
            }
        }


//    $sql_name = (substr($sql_name,-1) == ',') ? substr($sql_name, 0, -1) : $sql_name;
        $sql_picture = (substr($sql_picture,-1) == ',') ? substr($sql_picture, 0, -1) : $sql_picture;

        $debug = "UPDATE tb_album SET title_album = '$old_title_album', ".$sql_picture. "WHERE id = $album_id";

        $conn->query("UPDATE tb_album SET title_album = '$old_title_album', ".$sql_picture. "WHERE id = $album_id");

    }

    echo "<script>window.location = '../admin/manage_album.php'</script>";

?>