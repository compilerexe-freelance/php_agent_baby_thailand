<?php
require_once ("header.php");
$_SESSION["navbar"] = "manage_topic";
require_once "navbar.php";

$no = 1;
?>

<style>
    label {
        font-size: 18px;
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
    <div class="col-md-12">
        <div class="card">
            <div class="card-block text-center">

                <div class="form-group text-right">
                    <a href="insert_topic.php" style="font-size: 20px;"><i class="fa fa-plus"></i> เพิ่มกระทู้</a>
                </div>

                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-size: 20px;">ลำดับที่</th>
                                <th style="font-size: 20px;">ชื่อหัวข้อ</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tb_topic";
                            $result = $conn->query($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$no."</td>";
                                echo "<td>".$row["topic_title"]."</td>";
                                echo "<td><a href='update_topic.php?id=".$row["id"]."'><i class='fa fa-pencil'></i> แก้ไข</a></td>";
                                echo "<td><a href='../process/delete_topic.php?id=".$row["id"]."' style='color: red;'><i class='fa fa-trash-o'></i> ลบ</a></td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
