<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/AutoSlide.js"></script>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <ul class="menubar">
                <img src="images/TuneICO.png" alt="No Image" style="width: 80px; height: 80px; margin: 0% 1%;">
                <li class="menubar-item"><a href="index.php">HOME</a></li>
                <li class="menubar-item hoverClassify"><a href="#">CLASSIFY</a>
                    <ul class="Classifymenu">
                        <li class="classify"><a href="?page=edm">EDM MUSIC</a></li>
                        <li class="classify"><a href="?page=pop">POP MUSIC</a></li>
                        <li class="classify"><a href="?page=popular">POPULAR MUSIC</a></li>
                    </ul>
                </li>
                <li class="menubar-item"><a href="?page=music_download">MUSIC DOWNLOAD</a></li>
                <li class="menubar-item"><a href="?page=feedback">FEEDBACK</a></li>
            </ul>
            <ul class="menubar2">
                <li class="menubar-item item1" align="left">
                    <input type="search" name="searchbar" id="search" class="searchbar" style="outline: none; width: 120%; height: 30px; border-radius: 100px; background-color: white; border: solid 1px gray; padding: 0% 3%; box-shadow: 0px 1px 5px gray;" placeholder="Typing songs, singers name, music kinds">
                    <a class="search" href="#">
                        <input type="button" id="btnsearch" value="Search" style="cursor: pointer; margin: 3% 0%; width: 70px; height: 30px; border-radius: 100px; background-color: white; border: solid 1px gray; box-shadow: 0px 1px 2px gray;">
                    </a>
                </li>
                <li class="menubar-item item2" align="right"><a href="?page=premium">PREMIUM</a></li>
                <li class="menubar-item item2" align="right"><a href="?page=member_card">MEMBER CARD</a></li>
                <li class="menubar-item item3" align="right">
                    <a href="?page=login">
                        <input type="text" value="" placeholder="LOGIN HERE" readonly style="outline: none; border: none; cursor: pointer; padding-left: 3%; width: 70%; height: 25px; border-radius: 100px;">
                    </a>
                </li>
                <audio src="sounds/Audio Welcome.m4a" autoplay></audio>
            </ul>
        </nav>
        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page=="login"){
                    include_once("Login.php");
                }
                if($page=="edm"){
                    include_once("Edm.php");
                }
                if($page=="pop"){
                    include_once("Pop.php");
                }
                if($page=="popular"){
                    include_once("Popular.php");
                }
                if($page=="premium"){
                    include_once("Premium.php");
                }
                if($page=="member_card"){
                include_once("Member_Card.php");
                }
                if($page=="music_download"){
                    include_once("Music_Download.php");
                }
                if($page=="feedback"){
                    include_once("Feedback.php");
                }
                if($page=="regis"){
                    include_once("Regis.php");
                }
                if($page=="update"){
                    include_once("Update.php");
                }
                if($page=="delete"){
                    include_once("Delete.php");
                }
                if($page=="add"){
                    include_once("Add.php");
                }
            }
            else {
                include_once("Home.php");
            }
        ?>
        <nav class="footer">
            <li class="footer-item"><p class="p">PHONE:</p>
                <a class="p" href="#">0123456789</a>
                <p style="margin-top: 15px;">
                    <a href="#"><img style="width: 30px; background-color:white; border-radius: 10px; opacity: 0.7;" src="images/facebook.png" alt="Facebook"></a>
                    <a href="#"><img style="width: 30px; background-color:white; border-radius: 10px; opacity: 0.7;" src="images/instagram.png" alt="Instagram"></a>
                    <a href="#"><img style="width: 30px; background-color:white; border-radius: 10px; opacity: 0.7;" src="images/wechat.png" alt="Wechat"></a>
                </p>
            </li>
            <li class="footer-item"><p class="p">EMAIL:</p><a class="p" href="#">tunesourceaud0703@gmail.com</a></li>
            <li class="footer-item"><p class="p">ADDRESS:</p><a class="p" href="#">Mauthan, Xuankhanh, Ninhkieu district, Cantho city</a></li>
        </nav>
        <nav class="footer">
            <li class="footer-item" style="text-align: center;"><p class="p">&copy; Copyright by TUNE SOURCE Et.</p></li>
        </nav>
        </div>
</body>
</html>