<?php
require_once ("header.php");
$_SESSION["navbar"] = "manage_album";
require_once "navbar.php";
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block text-center">

                <div class="form-group text-right">
                    <a href="insert_album.php" style="font-size: 20px;"><i class="fa fa-plus"></i> สร้างอัลบั้ม</a>
                </div>

                <div class="row">
                    <?php
                        $sql = "SELECT * FROM tb_album";
                        $result = $conn->query($sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-xs-3 col-sm-3 col-md-3" style="margin-top: 20px;">
                                    <div class="form-group text-center">
                                        <span style="font-size: 22px; font-weight: bold;">'.$row["title_album"].'</span>
                                    </div>
                                    <a href="view_album.php?id='.$row["id"].'">
                                        <img src="../assets/uploads/albums/'.$row["title_album"].'/image_1.jpg" style="width:100%;" />
                                    </a>
                                    </div>';
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
