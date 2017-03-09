<?php
include "header.php";
$_SESSION["navbar"] = "manage_agent";
include "navbar.php";
//
//if ($_SESSION["status"] == "กรุณาตรวจสอบรหัสผ่านอีกครั้ง") {
//    echo "
//    <script>
//        swal({
//            title: '',
//              text: '<span style=\'font-size: 18px;\'>กรุณาตรวจสอบรหัสผ่านอีกครั้ง</span>',
//              html: true
//        })
//    </script>";
//    $_SESSION["status"] = null;
//}

if ($_SESSION["status"] == "ชื่อผู้ใช้งานนี้มีในระบบแล้ว") {
    echo "
    <script>
        swal({
            title: '',
              text: '<span style=\'font-size: 18px;\'>ชื่อผู้ใช้งานนี้มีในระบบแล้ว</span>',
              html: true
        })
    </script>";
    $_SESSION["status"] = null;
}
?>

<style>
    label {
        font-size: 20px;
    }
</style>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-block">

                <div class="form-group text-center">
                    <span style="font-size: 36px;">เพิ่มผู้ดูแลระบบ</span>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                        <form action="../process/insert_admin.php" method="post">

                            <div class="form-group">
                                <label for="username" style="color: green">ชื่อผู้ใช้งาน</label>
                                <input type="text" name="username" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" style="color: green">รหัสผ่าน</label>
                                <input type="text" name="password" class="form-control" minlength="4" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="width: 100%">ยืนยัน</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
