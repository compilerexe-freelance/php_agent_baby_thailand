<?php
    include("header.php");

    $topic_id = $_GET["id"];

    $sql = "SELECT * FROM tb_topic WHERE id = $topic_id";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $topic_title = $row["topic_title"];
        $topic_detail = $row["topic_detail"];
        $view_count = $row["view_count"];
    }

    $view_count++;
    $sql = "UPDATE tb_topic SET view_count = $view_count WHERE id = $topic_id";
    $conn->query($sql);

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

                <div class="form-group text-right">
                    <a href="view_topic.php" style="font-size: 20px;"><i class="fa fa-angle-double-left"></i> ย้อนกลับ</a>
                </div>

                <div class="form-group text-center">
                    <span style="font-size: 36px;">กระทู้ <?php echo $topic_title; ?></span>
                </div>

                <div class="form-group">
                    <?php echo $topic_detail; ?>
                </div>

            </div>
        </div>

    </div>

</div>

<?php include ("footer.php"); ?>
