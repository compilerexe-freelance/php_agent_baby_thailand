<?php
require_once ("header.php");
$_SESSION["navbar"] = "manage_album";
require_once "navbar.php";
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block text-center">

                <form action="../process/insert_album.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-left">
                        <span style="font-size: 22px;">ชื่ออัลบั้ม</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title_album" style="font-size: 20px;">
                    </div>

                    <div class="form-group text-left">
                        <span style="font-size: 22px;">นามสกุลไฟล์รูปภาพ .jpg เท่านั้น</span>
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_2" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_3" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_4" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_5" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_6" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_7" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_8" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_9" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_10" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_11" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_12" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_13" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_14" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture_15" class="form-control">
                    </div>
                    <div class="form-group text-center" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-success" style="width: 200px;">สร้างอัลบั้ม</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
