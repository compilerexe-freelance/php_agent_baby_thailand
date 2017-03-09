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

    $topic_id = $_GET["id"];

    $sql = "SELECT * FROM tb_topic WHERE id = $topic_id";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $topic_title = $row["topic_title"];
        $topic_detail = $row["topic_detail"];
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
                    <span style="font-size: 36px;">แก้ไขกระทู้ <?php echo $topic_title; ?></span>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                        <form action="../process/update_topic.php?id=<?php echo $topic_id; ?>" method="post">

                            <div class="form-group">
                                <label for="topic_title" style="color: green">ชื่อหัวข้อ</label>
                                <input type="text" name="topic_title" class="form-control" value="<?php echo $topic_title; ?>" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="topic_detail" style="color: green">เนื้อหา</label><br>
                                <div class="form-group text-right">
                                    <a href="https://www.ohlanor.com/main/" target="_blank" style="font-size: 20px;"><i class="fa fa-picture-o"></i> อัพโหลดรูปภาพ</a>
                                </div>
                                <textarea name="topic_detail"><?php echo $topic_detail; ?></textarea>
                            </div>
                            <div class="form-group text-center" style="margin-top: 40px;">
                                <button type="submit" class="btn btn-success" style="width: 200px;">บันทึก</button>
                                <a href="manage_topic.php"><button type="button" class="btn btn-danger" style="width: 200px; margin-left: 20px;">ยกเลิก</button></a>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
