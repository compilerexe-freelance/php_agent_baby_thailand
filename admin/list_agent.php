<?php
include "header.php";
$_SESSION["navbar"] = "manage_agent";
include "navbar.php";
?>

<style>
    label {
        font-size: 20px;
    }
    tr th {
        text-align: center;
        vertical-align: middle !important;
    }
    tr td {
        text-align: center;
        vertical-align: middle !important;
    }
</style>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-block">

                <div class="form-group text-center">
                    <span style="font-size: 36px;">รายชื่อตัวแทนจำหน่ายทั้งหมด</span>
                </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-size: 20px;">รหัสตัวแทนจำหน่าย</th>
                                <th style="font-size: 20px;">ชื่อ-นามสกุล</th>
                                <th style="font-size: 20px;">นัดรับ</th>
                                <th style="font-size: 20px;">สายงาน</th>
                                <th style="font-size: 20px;">สถานะ</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tb_user";
                            $result = $conn->query($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$row["code"]."</td>";
                                echo "<td>".$row["full_name"]."</td>";
                                echo "<td>".$row["province_name"]."</td>";
                                echo "<td>".$row["position"]."</td>";

                                $user_id = $row["id"];
                                $sql = "SELECT * FROM tb_status WHERE user_id = $user_id";
                                $result_status = $conn->query($sql);
                                while ($row_status = mysqli_fetch_assoc($result_status)) {
                                    echo "<td>".$row_status["status"]."</td>";
                                }

                                echo "<td><a href='update_agent.php?id=".$user_id."'><i class='fa fa-pencil'></i> แก้ไข</a></td>";
                                echo "<td><a href='../process/delete_agent.php?id=".$user_id."' style='color: red;'><i class='fa fa-trash-o'></i> ลบ</a></td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
