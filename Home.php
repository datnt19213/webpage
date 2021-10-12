<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/SlideShow.css">
    <link rel="stylesheet" href="css/Song.css">
</head>
<body>
    <div class="Wrapper">
        <!--<div class="slide">
            <img class="pic" src="images/a1.jpg" alt="No Image 1" id="img">
            <img class="pic" src="images/a2.jpg" alt="No Image 2" id="img">
            <img class="pic" src="images/a3.jpg" alt="No Image 3" id="img" /*style="margin: 5% 5% 10% 10%; width: 80%; height:fit-content;"*/>
        </div>
        <div class="radio">
            <input class="rd" type="radio" name="radio" id="rd1">
            <input class="rd" type="radio" name="radio" id="rd2">
            <input class="rd" type="radio" name="radio" id="rd3">
        </div>-->
    </div>
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="images/Lantern.jpg" style="height:300px; width: 100%;">
        </div>
        <div class="mySlides fade">
            <img src="images/DiEsi.jpg" style="height:300px; width: 100%;">
        </div>
        <div class="mySlides fade">
            <img src="images/Lonely_Dance.jpg" style="height: 300px; width: 100%;">
        </div>
        <!--<div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>-->
    </div>
    <div class="container">
        <form class="form" action="">
            <audio controls src="sounds/Xomu-Lanterns-Miyuri-Remix-mp3-Xomu.mp3" class="au"></audio>
            <hr>
            <ul class="auinfor">
                <li class="txt">Song ID: <b>1</b></li>
                <li class="txt">Author ID: <b>Unknow</b></li>
                <li class="txt">Category ID: <b>EDM</b></li>
                <li class="txt">Song name: <b>Lanterns</b></li>
                <li class="txt">Time: <b>3:31</b></li>
                <li class="txt">Price: <b>10$</b></li>
            </ul>
        </form>
        <form class="form" action="">
            <audio controls src="sounds/DiESi-Remix-DiESi-Remix.mp3" class="au"></audio>
            <hr>
            <ul class="auinfor">
                <li class="txt">Song ID: <b>2</b></li>
                <li class="txt">Author ID: <b>Unknow</b></li>
                <li class="txt">Category ID: <b>EDM</b></li>
                <li class="txt">Song name: <b>DiESi</b></li>
                <li class="txt">Time: <b>4:40</b></li>
                <li class="txt">Price: <b>10$</b></li>
            </ul>
        </form>
        <form class="form" action="">
            <audio controls src="sounds/Vexento-Lonely-Dance-mp3-dang-cap-nhat.mp3" class="au"></audio>
            <hr>
            <ul class="auinfor">
                <li class="txt">Song ID: <b>3</b></li>
                <li class="txt">Author ID: <b>Unknow</b></li>
                <li class="txt">Category ID: <b>EDM</b></li>
                <li class="txt">Song name: <b>Lonely Dance</b></li>
                <li class="txt">Time: <b>3:27</b></li>
                <li class="txt">Price: <b>10$</b></li>
            </ul>
        </form>
    </div>

</body>
<script>
    showSlides();
</script>
</html>