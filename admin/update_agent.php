<?php
    require_once ("header.php");
    $_SESSION["navbar"] = "manage_agent";
    require_once ("navbar.php");

    $user_id = $_GET["id"];

    $sql = "SELECT * FROM tb_user WHERE id = $user_id";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $code = $row["code"];
        $full_name = $row["full_name"];
        $tel = $row["tel"];
        $province_name = $row["province_name"];
        $position = $row["position"];
        $image = $row["image"];
    }

    // Social
    $sql = "SELECT * FROM tb_social WHERE user_id = $user_id";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $line = $row["line"];
        $facebook = $row["facebook"];
        $instagram = $row["instagram"];
    }

    // Status
    $sql = "SELECT * FROM tb_status WHERE user_id = $user_id";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $status = $row["status"];
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
                    <span style="font-size: 36px;">แก้ไขตัวแทนจำหน่าย</span>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                        <form action="../process/update_agent.php?id=<?php echo $user_id; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <img src="../assets/uploads/cards/<?php echo $image; ?>" style="width: 100%;" alt="">
                            </div>
                            <div class="form-group">
                                <label for="full_name" style="color: green">รหัสตัวแทนจำหน่าย</label>
                                <input type="text" name="code" class="form-control" value="<?php echo $code; ?>" disabled>
                                <input type="text" name="code" class="form-control" value="<?php echo $code; ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="full_name" style="color: green">ชื่อ-นามสกุล</label>
                                <input type="text" name="full_name" class="form-control" value="<?php echo $full_name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="line" style="color: green">Line</label>
                                <input type="text" name="line" class="form-control" value="<?php echo $line; ?>">
                            </div>
                            <div class="form-group">
                                <label for="facebook" style="color: green">Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>">
                            </div>
                            <div class="form-group">
                                <label for="instagram" style="color: green">Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="<?php echo $instagram; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tel" style="color: green">เบอร์ติดต่อ</label>
                                <input type="text" name="tel" class="form-control" value="<?php echo $tel; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="province" style="color: green">นัดรับ</label>
                                <!-- <input type="text" name="address" class="form-control" required> -->
                                <select name="province_name" id="" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM tb_province";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["province_name"] == $province_name) {
                                            echo "<option value='".$row["province_name"]."' selected>".$row["province_name"]."</option>";
                                        } else {
                                            echo "<option value='".$row["province_name"]."'>".$row["province_name"]."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="position" style="color: green">สายงาน</label>
                                <input type="text" name="position" class="form-control" value="<?php echo $position; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="status" style="color: green">สถานะ</label>
                                <select name="status" id="" class="form-control">


                                    <option value="ตัวแทนย่อย" <?php if ($status == "ตัวแทนย่อย") { echo "selected"; } ?>>ตัวแทนย่อย</option>
                                    <option value="ตัวแทนหลัก" <?php if ($status == "ตัวแทนหลัก") { echo "selected"; } ?>>ตัวแทนหลัก</option>
                                    <option value="VIP" <?php if ($status == "VIP") { echo "selected"; } ?>>VIP</option>
                                    <option value="DEALER" <?php if ($status == "DEALER") { echo "selected"; } ?>>DEALER</option>
                                    <option value="SUPER DEALER" <?php if ($status == "SUPER DEALER") { echo "selected"; } ?>>SUPER DEALER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="full_name" style="color: green">รูปภาพบัตร (นามสกุลไฟล์ .jpg)</label>
                                <input type="file" name="card" class="form-control">
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
