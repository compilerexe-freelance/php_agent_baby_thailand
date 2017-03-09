<?php include("header.php"); ?>

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
                    <span style="font-size: 36px;">สถานะ <?php echo $_SESSION["search_status"]; ?></span>
                </div>

                <div class="row">
                    <?php
                      $status = $_SESSION["search_status"];
                      $sql = "SELECT * FROM tb_status WHERE status = '$status'";
                      $result = $conn->query($sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $user_id = $row["user_id"];

                        $sql = "SELECT * FROM tb_user WHERE id = '$user_id'";
                        $result_status = $conn->query($sql);
                        while ($row_status = mysqli_fetch_assoc($result_status)) {
                          echo "<div class=\"col-md-4\"><div class=\"form-group\">";
                          echo "<a href='member_detail.php?id=".$row_status["id"]."'><img src='../assets/uploads/cards/".$row_status["image"]."' style='width: 100%; height: 300px' /></a>";
                          echo "</div></div>";
                        }

                      }
                    ?>
                </div>

            </div>
        </div>

    </div>

</div>

<?php include ("footer.php"); ?>
