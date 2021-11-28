<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming di RumahDino.</title>
    <link rel="stylesheet" href="<?php echo url_dasar() ?>/css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar() ?>'>RumahDino.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar() ?>#home">HOME</a></li>
                    <li><a href="<?php echo url_dasar() ?>#courses">COURSES</a></li>
                    <li><a href="<?php echo url_dasar() ?>#tutors">TUTORS</a></li>
                    <li><a href="<?php echo url_dasar() ?>#partners">PARTNERS</a></li>
                    <li><a href="<?php echo url_dasar() ?>#contact">CONTACT</a></li>
                    <li><a class="nav-link" href="admin/login.php">ADMIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">