<?php
    include("header.php");

    if ($_SESSION["status"] == "found") {
        echo "<script>
        swal(\"ผลการค้นหา\", \"รหัสที่ตรวจสอบเป็นตัวแทนจำหน่าย\", \"success\")
        </script>";
        $_SESSION["status"] = null;
    } else if ($_SESSION["status"] == "not found") {
        echo "<script>
        sweetAlert(\"ผลการค้นหา\", \"ไม่พบข้อมูลนี้ในระบบ\", \"error\");
        </script>";
        $_SESSION["status"] = null;
    }
?>

<div class="row" style="margin-top: 20px;">

    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="form-group text-center">
                    <span style="font-size: 24px; font-weight: bold">ตรวจสอบสถานะรหัสตัวแทน</span>
                </div>
                <div class="form-group">
                    <span style="font-size: 18px;">กรอกรหัสตัวแทนจำหน่าย</span>
                </div>

                <form action="process/search_code.php" method="post">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="agent_code" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" style="width: 100%;">ค้นหา</button>
                            </div>
                        </div>

                    </div>
                </form>

                <div class="form-group">
                    <span style="font-size: 18px;">เพื่อความปลอดภัยในการสั่งซื้อสินค้า</span>
                </div>
                <div class="form-group">
                    <span style="font-size: 18px;">หมายเหตุ</span><br>
                    <span style="font-size: 18px;">1.การค้นรหัสตัวแทนจำหน่ายจะทำให้ผู้ซื้อมั่นใจว่าไม่โดนหลอก</span><br>
                    <span style="font-size: 18px;">2.ถ้าค้นหาไม่เจอแสดงว่าตัวแทนจำหน่ายนั้นไม่มีรายชื่อในระบบ</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="form-group text-center">
                    <span style="font-size: 24px; font-weight: bold">ค้นหาตัวแทนจำหน่าย</span>
                </div>

                <form action="process/search_province.php" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group text-center">
                                <span style="font-size: 18px;">เลือกจังหวัด</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <select name="province" id="" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM tb_province";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row["province_name"]."'>".$row["province_name"]."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" style="width: 100%;">ค้นหา</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-4 offset-md-8">
                        <div class="form-group">
                            <a href="agent_all.php"><button type="button" class="btn btn-success" style="width: 100%;">ค้นหาทั้งหมด</button></a>
                        </div>
                    </div>
                </div>

                <hr>

                <form action="process/search_status.php" method="post" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group text-center">
                                <span style="font-size: 18px;">สถานะ</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <select name="status" id="" class="form-control">
                                    <option value="ตัวแทนย่อย">ตัวแทนย่อย</option>
                                    <option value="ตัวแทนหลัก">ตัวแทนหลัก</option>
                                    <option value="VIP">VIP</option>
                                    <option value="DEALER">DEALER</option>
                                    <option value="SUPER DEALER">SUPER DEALER</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" style="width: 100%;">ค้นหา</button>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>


</div>

<?php include ("footer.php"); ?>
