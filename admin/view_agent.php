<?php
include "header.php";
$_SESSION["navbar"] = "manage_agent";
include "navbar.php";
?>

<style>
    label {
        font-size: 18px;
    }
</style>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-block">

                <div class="form-group text-center">
                    <span style="font-size: 36px;">ตัวแทนจำหน่ายทั้งหมด</span>
                </div>

                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="form-group">

                        </div>
                    </div> -->
                    <?php
                      $sql = "SELECT * FROM tb_user";
                      $result = $conn->query($sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"col-md-4\"><div class=\"form-group\">";
                        echo "<a href='member_detail.php?id=".$row["id"]."'><img src='../assets/uploads/cards/".$row["image"]."' style='width: 100%; height: 300px' /></a>";
                        echo "</div></div>";
                      }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
