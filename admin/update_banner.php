<?php
require_once ("header.php");
$_SESSION["navbar"] = "manage_banner";
require_once "navbar.php";
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block text-center">

                <form action="../process/update_banner.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-left">
                        <span style="font-size: 36px;">แบนเนอร์ 1</span>
                        <img src="../assets/images/banner/banner_1.jpg" style="width: 100%;" alt="">
                        <div style="margin-top: 20px;">
                            <span style="font-size: 18px; color: red;">นามสกุลไฟล์รูปภาพ .jpg เท่านั้น</span>
                            <input type="file" class="form-control" name="banner_1"">
                        </div>
<!--                        <hr>-->
                    </div>

                    <div class="form-group text-left">
                        <span style="font-size: 36px;">แบนเนอร์ 2</span>
                        <img src="../assets/images/banner/banner_2.jpg" style="width: 100%;" alt="">
                        <div style="margin-top: 20px;">
                            <span style="font-size: 18px; color: red;">นามสกุลไฟล์รูปภาพ .jpg เท่านั้น</span>
                            <input type="file" class="form-control" name="banner_2"">
                        </div>
<!--                        <hr>-->
                    </div>

                    <div class="form-group text-left">
                        <span style="font-size: 36px;">แบนเนอร์ 3</span>
                        <img src="../assets/images/banner/banner_3.jpg" style="width: 100%;" alt="">
                        <div style="margin-top: 20px;">
                            <span style="font-size: 18px; color: red;">นามสกุลไฟล์รูปภาพ .jpg เท่านั้น</span>
                            <input type="file" class="form-control" name="banner_3"">
                        </div>
<!--                        <hr>-->
                    </div>

                    <div class="form-group text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-success" style="width: 200px;">บันทึก</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
