<?php
require_once ("header.php");
$_SESSION["navbar"] = "manage_album";
require_once "navbar.php";

$album_id = $_GET["id"];


$sql = "SELECT * FROM tb_album WHERE id = $album_id";
$result = $conn->query($sql);

$start = 1;
while ($row = mysqli_fetch_assoc($result)) {
    $title_album = $row["title_album"];
}

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block text-center">

                <div class="form-group text-center">
                    <span style="font-size: 38px; font-weight: bold;">แก้ไขอัลบั้ม <?php echo $title_album; ?></span>
                </div>

                <form action="../process/update_album.php?id=<?php echo $album_id; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group text-left">
                        <span style="font-size: 22px;">ชื่ออัลบั้ม</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title_album" value="<?php echo $title_album; ?>" style="font-size: 20px;">
                        <input type="text" class="form-control" name="old_title_album" value="<?php echo $title_album; ?>" style="font-size: 20px;" hidden>
                    </div>

                    <div class="form-group text-left">
                        <span style="font-size: 22px;">นามสกุลไฟล์รูปภาพ .jpg เท่านั้น</span>
                    </div>

                    <?php
                        $sql = "SELECT * FROM tb_album WHERE id = $album_id";
                        $result = $conn->query($sql);

                        $start = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            for ($i = 1; $i <= 15; $i++) {
                                echo '
                                <div class="form-group">
                                    <img src="../assets/uploads/albums/'.$title_album.'/'.$row["image_".$start].'" style="width: 100%;" alt="">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="picture_'.$start.'" class="form-control">
                                </div>
                                <div class="form-group">
                                    <hr style="border: 1px solid red;">
                                </div>
                                ';
                                $start++;
                            }
                        }
                    ?>

                    <div class="form-group text-center" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-success" style="width: 200px;">บันทึก</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
