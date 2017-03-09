<style>

    .navbar {
        /*padding-top: 0px;*/
    }

    .nav-item {
        /*margin-right: 15px !important;*/
    }

    /*.nav-link {*/
        /*margin-left: 10px;*/
        /*margin-right: 10px;*/
    /*}*/

    .active {
        background-color: #2aabd2;
    }
</style>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" style="//background-color: #ff8080;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
<!--        <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">-->
        <span>&nbsp;</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" id="navbar-font">

            <?php
            if ($_SESSION["navbar"] == "main") {
                echo "<li class=\"nav-item active\">";
            } else {
                echo "<li class=\"nav-item\">";
            }
            ?>
                <a class="nav-link" href="main.php">หน้าหลัก <span class="sr-only">(current)</span></a>
            </li>

            <?php
            if ($_SESSION["navbar"] == "manage_agent") {
                echo "<li class=\"nav-item dropdown active\">";
            } else {
                echo "<li class=\"nav-item dropdown\">";
            }
            ?>
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    จัดการตัวแทนจำหน่าย
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="view_agent.php" style="color: #000; font-size: 16px;">ตัวแทนจำหน่ายทั้งหมด</a>
                    <a class="dropdown-item" href="insert_agent.php" style="color: #000; font-size: 16px;">เพิ่มตัวแทนจำหน่าย</a>
                    <a class="dropdown-item" href="list_agent.php" style="color: #000; font-size: 16px;"">แก้ไขตัวแทนจำหน่าย</a>
                </div>
            </li>

            <?php
            if ($_SESSION["navbar"] == "manage_topic") {
                echo "<li class=\"nav-item active\">";
            } else {
                echo "<li class=\"nav-item\">";
            }
            ?>
            <a class="nav-link" href="manage_topic.php">จัดการกระทู้</a>
            </li>

            <?php
            if ($_SESSION["navbar"] == "manage_banner") {
                echo "<li class=\"nav-item active\">";
            } else {
                echo "<li class=\"nav-item\">";
            }
            ?>
                <a class="nav-link" href="update_banner.php">จัดการแบนเนอร์</a>
            </li>

            <?php
            if ($_SESSION["navbar"] == "manage_album") {
                echo "<li class=\"nav-item active\">";
            } else {
                echo "<li class=\"nav-item\">";
            }
            ?>
            <a class="nav-link" href="manage_album.php">จัดการอัลบั้มรูปภาพ</a>
            </li>

            <?php
            if ($_SESSION["navbar"] == "manage_admin") {
                echo "<li class=\"nav-item active\">";
            } else {
                echo "<li class=\"nav-item\">";
            }
            ?>
            <a class="nav-link" href="manage_admin.php">จัดการผู้ดูแลระบบ</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="../process/logout.php"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>
            </li>


<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">About us</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    จัดการตัวแทนจำหน่าย-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                    <a class="dropdown-item" href="#" style="color: #000; font-size: 16px;">All Product</a>-->
<!--                    <a class="dropdown-item" href="#" style="color: #000; font-size: 16px;"">Review</a>-->
<!--                    <a class="dropdown-item" href="#" style="color: #000; font-size: 16px;"">Topic</a>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Baby-Family</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="check_agent.php">ตัวแทนจำหน่าย</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="condition.php">เงื่อนไข</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="contact.php">Contact us</a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>