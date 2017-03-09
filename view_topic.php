<?php
    include("header.php");
    $no = 1;
?>

<style>
    tr th {
        text-align: center;
        font-size: 18px;
    }
    tr td {
        text-align: center;
    }
</style>

<div class="row" style="margin-top: 20px;">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="card">
            <div class="card-block">

                <div class="form-group text-center">
                    <span style="font-size: 36px;">กระทู้ทั้งหมด</span>
                </div>

                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-size: 20px;">ลำดับที่</th>
                                <th style="font-size: 20px;">ชื่อหัวข้อ</th>
                                <th style="font-size: 20px;">ยอดเข้าชม</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tb_topic";
                            $result = $conn->query($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$no."</td>";
                                echo "<td><a href='read_topic.php?id=".$row["id"]."'>".$row["topic_title"]."</a></td>";
                                echo "<td>".$row["view_count"]."</td>";
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

<?php include ("footer.php"); ?>
