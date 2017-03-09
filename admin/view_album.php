<?php
include("header.php");
$_SESSION["navbar"] = "manage_album";
require_once "navbar.php";
$album_id = $_GET["id"];
?>

<div class="row" style="margin-top: 20px;">

    <div class="col">
        <div class="card">

            <div class="card-block">

                <?php
                    $sql = "SELECT * FROM tb_album WHERE id = $album_id";
                    $result = $conn->query($sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        
                        <div class="form-group text-right">
                            <a href="update_album.php?id='.$row["id"].'" style="font-size: 20px; margin-right: 50px;"><i class="fa fa-pencil"></i> แก้ไขอัลบั้ม</a>
                            <a href="../process/delete_album.php?id='.$row["id"].'" style="font-size: 20px; color: red;"><i class="fa fa-trash-o"></i> ลบอัลบั้ม</a>
                        </div>
                        
                        <div class="form-group text-center">
                            <span style="font-size: 38px; font-weight: bold;">'.$row["title_album"].'</span>
                        </div>
        
                        <div class="row">';

                        if ($row["image_1"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_1"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_1"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_2"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_2"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_2"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_3"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_3"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_3"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }


                        if ($row["image_4"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_4"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_4"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        echo '</div>
                        <div class="row" style="margin-top: 20px;">';


                        if ($row["image_5"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_5"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_5"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_6"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_6"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_6"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_7"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_7"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_7"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_8"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_8"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_8"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        echo '</div>
        
                        <div class="row" style="margin-top: 20px;">';

                        if ($row["image_9"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_9"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_9"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_10"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_10"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_10"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_11"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_11"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_11"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_12"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_12"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_12"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        echo '</div>
        
                        <div class="row" style="margin-top: 20px;">';

                        if ($row["image_13"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_13"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_13"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_14"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_14"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_14"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        if ($row["image_15"] != "") {
                            echo '
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <a class="image-popup-vertical-fit" href="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_15"] . '">
                                    <img src="../assets/uploads/albums/' . $row["title_album"] . '/' . $row["image_15"] . '" style="width:100%;" />
                                </a>
                            </div>';
                        }

                        echo '</div>';
                    }
                ?>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
//        $('.parent-container').magnificPopup({
//            delegate: 'img',
//            type:'image'
//        });
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });
    });
</script>

<?php include ("footer.php"); ?>
