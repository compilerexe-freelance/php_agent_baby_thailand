<?php
require_once ("../process/config.php");
require_once ("../process/auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="babygluta, gluta">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Baby-Thailand</title>

    <link rel="shortcut icon" href="../assets/images/logo.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/sweetalert.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <script src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>

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
