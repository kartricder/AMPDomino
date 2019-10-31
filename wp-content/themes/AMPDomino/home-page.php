<!DOCTYPE html>
<?php
/*
 *  Template Name: Home Page Domino
 * */
?>

<html ⚡="" lang="en">
<head>
    <meta charset="utf-8">
    <title>Domino Glass Kitchen</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <link rel="canonical" href="https://tubepdomino/home-page.php/">
    
    <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <style amp-custom="">
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }
        body {
         margin: 0;
         font-family: 'Open Sans', sans-serif;
        }
        .relative-class{
            position: relative;
        }
        .header-text {
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            font-size: 100px;
            font-weight: 700;
            line-height: 100px;
            color: 
            #fff;
            letter-spacing: 15px;
        }
        .head-dmn-amp {
            position: relative;
        }
        .amp-header-lg {
            position: absolute;
            z-index: 3;
            padding-left: 15px;
            padding-top: 15px;
        }
        .amp-header-lg {
        width: 100%;
        }
        .amp-header-lg a {
        float: left;
        }
        .nav-amp {
        float: right;
        margin-right: 30px;
        margin-top: 18px;
        }
        .nav-amp a {
        display: inline-block;
        margin-left: 20px;
        margin-right: 25px;
        text-transform: uppercase;
        font-weight: 300;
        font-size: 18px;
        color:#fff;
        }
        
        .container {
        width:100%;
        padding-right:15px;
        padding-left:15px;
        margin-right:auto;
        margin-left:auto
        }
        @media (min-width:576px) {
        .container {
        max-width:540px
        }
        }
        @media (min-width:768px) {
        .container {
        max-width:720px
        }
        }
        @media (min-width:992px) {
        .container {
        max-width:960px
        }
        }
        @media (min-width:1200px) {
        .container {
         max-width:1140px
        }
        }
        @media (min-width:1800px) {
        .container {
         max-width:1700px
        }
        }
        .container-fluid {
        width:100%;
        padding-right:15px;
        padding-left:15px;
        margin-right:auto;
        margin-left:auto
        }
        .row {
        position:relative;
        display:-ms-flexbox;
        display:flex;
        -ms-flex-wrap:wrap;
        flex-wrap:wrap;
        margin-right:-15px;
        margin-left:-15px
        }
        .col {
        position:relative;
        width:100%;
        padding-right:15px;
        padding-left:15px;
        }
        .enter-side {
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 3px;
            display: block;
            text-decoration: none;
            font-weight: 300;
            color:#fff;
        }
    </style>
</head>
<body>
    <div class="head-dmn-amp">
    <!-- Header Start -->
    <div class="container">
        <div class="row">
            <div class="amp-header-lg">
                <a href="#" class=""> <amp-img class="logo-amp" src="<?php the_field('logo')?>" width="200" height="70" layout="fixed"></amp-img> </a>
                <div class="nav-amp">
                    <a>Home</a>
                    <a>Work</a>
                    <a>Contact</a>
                </div>
            </div>
        </div>
    </div>    
        <!--  -->
        <!-- Background Image -->
        <div class="relative-class">
            <amp-img class="commerce-hero-image" src="<?php the_field('image_background')?>" width="1920" height="1080"
            layout="responsive" alt="Hero Landing 1" noloading="">
            </amp-img>
            <div class="header-text">DOMINO
                <a href="#" class="enter-side">Enter</a>
            </div>
            
        </div>
    <!--  -->
    </div>
</body>
</html>