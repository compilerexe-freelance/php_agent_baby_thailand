<?php include("header.php"); ?>

<div class="row" style="margin-top: 20px;">

    <div class="col">
        <div class="card">

            <div class="card-block">

                <div class="row">
                    <?php
                    $sql = "SELECT * FROM tb_album";
                    $result = $conn->query($sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-xs-3 col-sm-3 col-md-3" style="margin-top: 20px;">
                                    <div class="form-group text-center">
                                        <span style="font-size: 22px; font-weight: bold;">'.$row["title_album"].'</span>
                                    </div>
                                    <a href="album.php?title_album='.$row["title_album"].'">
                                        <img src="assets/uploads/albums/'.$row["title_album"].'/image_1.jpg" style="width:100%;" />
                                    </a>
                                    </div>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
//        $('.parent-container').magnificPopup({
//            delegate: 'img',
//            type:'image'
//        });
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });
    });
</script>

<?php include ("footer.php"); ?>
