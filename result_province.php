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
                    <span style="font-size: 36px;">จังหวัด <?php echo $_SESSION["search_province"]; ?></span>
                </div>

                <div class="row">
                    <?php
                      $province_name = $_SESSION["search_province"];
                      $sql = "SELECT * FROM tb_user WHERE province_name = '$province_name'";
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

<?php include ("footer.php"); ?>
