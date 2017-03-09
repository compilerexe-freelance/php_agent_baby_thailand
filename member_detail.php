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

                <!-- <div class="form-group text-center">
                    <span style="font-size: 36px; color: green">รายละเอียดสมาชิก</span>
                </div> -->

                <div class="row">
                    <?php
                      $id = $_GET["id"];
                      $sql = "SELECT * FROM tb_user WHERE id = $id";
                      $result = $conn->query($sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"col-xs-12 col-sm-12 col-md-4 offset-md-1\"><div class=\"form-group\">";
                        echo "<img src='../assets/uploads/cards/".$row["image"]."' style='width: 100%; height: 300px' />";
                        echo "</div></div>";

                        echo "<div class=\"col-xs-12 col-sm-12 col-md-6\">";
                        echo "<div class=\"card card-block\" style='border: 1px solid green'>";
                        echo "<div class=\"form-group text-center\"><span style=\"font-size: 30px; color: green\">".$row["full_name"]."</span><hr /></div>";
                        // echo "<div class=\"form-group\"><span style=\"font-size: 20px\">รหัสตัวแทนจำหน่าย : ".$row["code"]."</span></div>";


                        $sql = "SELECT * FROM tb_status WHERE user_id = $id";
                        $result_status = $conn->query($sql);
                        while ($row_status = mysqli_fetch_assoc($result_status)) {
                          echo "<div class=\"form-group\">
                            <div class='row'>
                              <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                                <span style=\"font-size: 20px\">สถานะ</span>
                              </div>
                              <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                                <span style=\"font-size: 20px; color: green\">".$row_status["status"]."</span>
                              </div>
                            </div>
                          </div>";
                        }
                        echo "<div class=\"form-group\">
                          <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                              <span style=\"font-size: 20px\">นัดรับ</span>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                              <span style=\"font-size: 20px; color: green\">".$row["province_name"]."</span>
                            </div>
                          </div>
                        </div>";

                        echo "<div class=\"form-group\">
                          <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                              <span style=\"font-size: 20px\">ติดต่อ</span>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                              <span style=\"font-size: 20px; color: green\">".$row["tel"]."</span>
                            </div>
                          </div>
                        </div>";

                        $sql = "SELECT * FROM tb_social WHERE user_id = $id";
                        $result_social = $conn->query($sql);
                        while ($row_social = mysqli_fetch_assoc($result_social)) {

                          echo "<div class=\"form-group\">
                            <div class='row'>
                              <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                                <span style=\"font-size: 20px\">Line</span>
                              </div>
                              <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                                <span style=\"font-size: 20px; color: green\">".$row_social["line"]."</span>
                              </div>
                            </div>
                          </div>";

                          echo "<div class=\"form-group\">
                            <div class='row'>
                              <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                                <span style=\"font-size: 20px\">Facebook</span>
                              </div>
                              <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                                <span style=\"font-size: 20px; color: green\">".$row_social["facebook"]."</span>
                              </div>
                            </div>
                          </div>";

                          echo "<div class=\"form-group\">
                            <div class='row'>
                              <div class='col-xs-12 col-sm-12 col-md-4' style='text-align: center;'>
                                <span style=\"font-size: 20px\">Instagram</span>
                              </div>
                              <div class='col-xs-12 col-sm-12 col-md-8' style='text-align: center;'>
                                <span style=\"font-size: 20px; color: green\">".$row_social["instagram"]."</span>
                              </div>
                            </div>
                          </div>";

                        }



                        // echo "<div class=\"form-group\"><span style=\"font-size: 20px\">สายงาน : ".$row["position"]."</span></div>";



                        echo "</div></div>";
                      }
                    ?>
                </div>

            </div>
        </div>

    </div>

</div>

<?php include ("footer.php"); ?>
