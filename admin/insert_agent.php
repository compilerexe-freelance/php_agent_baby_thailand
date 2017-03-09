<?php
include "header.php";
$_SESSION["navbar"] = "manage_agent";
include "navbar.php";

// check num_rows
$sql = "SELECT * FROM tb_user";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);
if ($num_rows == 0) {
    $code = 1;
} else {
    $sql = "SELECT id FROM tb_user ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $last_id = $row["id"];
    }

    $code = ++$last_id;

}
// end check

if ($code <= 9) {
  $code = sprintf("%'02d", $code);
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
                    <span style="font-size: 36px;">เพิ่มตัวแทนจำหน่าย</span>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                        <form action="../process/insert_agent.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="full_name" style="color: green">รหัสตัวแทนจำหน่าย</label>
                                <input type="text" class="form-control" value="Baby<?php echo $code; ?>" disabled>
                                <input type="text" name="code" class="form-control" value="<?php echo $code; ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="full_name" style="color: green">ชื่อ-นามสกุล</label>
                                <input type="text" name="full_name" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="line" style="color: green">Line</label>
                                <input type="text" name="line" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="facebook" style="color: green">Facebook</label>
                                <input type="text" name="facebook" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="instagram" style="color: green">Instagram</label>
                                <input type="text" name="instagram" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tel" style="color: green">เบอร์ติดต่อ</label>
                                <input type="text" name="tel" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="province" style="color: green">นัดรับ</label>
                                <!-- <input type="text" name="address" class="form-control" required> -->
                                <select name="province_name" id="" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM tb_province";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row["province_name"]."'>".$row["province_name"]."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="position" style="color: green">สายงาน</label>
                                <input type="text" name="position" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="status" style="color: green">สถานะ</label>
                                <select name="status" id="" class="form-control">
                                    <option value="ตัวแทนย่อย">ตัวแทนย่อย</option>
                                    <option value="ตัวแทนหลัก">ตัวแทนหลัก</option>
                                    <option value="VIP">VIP</option>
                                    <option value="DEALER">DEALER</option>
                                    <option value="SUPER DEALER">SUPER DEALER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="full_name" style="color: green">รูปภาพบัตร (นามสกุลไฟล์ .jpg)</label>
                                <input type="file" name="card" class="form-control" required>
                            </div>
                            <div class="form-group" style="margin-top: 50px">
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
