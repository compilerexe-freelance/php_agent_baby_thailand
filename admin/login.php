<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Baby-Thailand</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/sweetalert.min.js"></script>

    <style>
        @font-face {
            font-family: 'Kanit';
            font-style: normal;
            font-weight: 400;
            src: local('Kanit'), local('Kanit-Regular'), url("../assets/font/Kanit.woff2") format('woff2');
            unicode-range: U+0E01-0E5B, U+200B-200D, U+25CC;
        }
        body {
            font-family: 'Kanit', sans-serif;
        }
        button {
            font-family: 'Kanit', sans-serif;
            font-size: 18px !important;
        }
        select {
            font-family: 'Kanit', sans-serif;
            font-size: 18px !important;
        }

        #navbar-font li a {
            font-size: 18px;
            color: #fff;
        }

    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <img style="height: 150px;" src="../assets/images/logo.png">
        </div>
    </div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="../process/check_login.php" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="width: 100%;"><i class="fa fa-sign-in"></i> Login</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include ("footer.php"); ?>
