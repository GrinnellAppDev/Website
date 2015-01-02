<?php 
$activeClass = "members";
include('inc/header.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title></title>

    <!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

</head>

<body>
    <div class="color">
        <div class="members">
            <div class="container">
                <div class="page-header main-content">
                    <h1 style="padding-top:150px;">The faces behind the apps?!</h1>
                </div>
            </div>
        </div>
    </div>

<!--     <div class="container">
        <div class="peeps">
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="maijidBox">
                        <div class="peeps_block" id="maijid1">
                            <a href="#maijid"><img class="responsive" id="maj" src="img/maijid.png"></a>
                            <p>Maijid</p>
                        </div>

                        <p><em>Maijid Moujaled</em><br>
                        iOS Developer/Leader<br>
                        <a href="https://www.linkedin.com/pub/maijid-moujaled/44/a42/873" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/drjid" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a> <a href="https://twitter.com/drjid" target="_blank"><img class="responsive bioLogo" src="img/twitterLogo.png"></a> <a href="http://www.cs.grinnell.edu/~moujaled/" target="_blank"><img class="responsive bioLogo" src="img/home.png"></a><br>
                        <a href="https://itunes.apple.com/us/app/g-licious/id523738999?mt=8" target="_blank"><img class="responsive appLogo" src="img/gLiciousLogo.png"></a> <a href="https://itunes.apple.com/us/app/s-b/id638912711?mt=8" target="_blank"><img class="responsive appLogo" src="img/sbLogo.png"></a> <a href="https://github.com/GrinnellAppDev/Grinnell-Events-iOS" target="_blank"><img class="responsive appLogo" src="img/eventsLogo.png"></a></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="peeps_block" id="colin1">
                        <a href="#colin"><img class="responsive" src="img/colin.png"></a>

                        <p>Colin</p>
                    </div>

                    <p><em>Colin Tremblay</em><br>
                    Senior iOS Developer<br>
                    <a href="https://www.linkedin.com/in/colintremblay" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/tremblay" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a> <a href="http://www.colintremblay.com" target="_blank"><img class="responsive bioLogo" src="img/home.png"></a><br>
                    <a href="https://itunes.apple.com/us/app/g-licious/id523738999?mt=8" target="_blank"><img class="responsive appLogo" src="img/gLiciousLogo.png"></a> <a href="https://itunes.apple.com/us/app/kdic/id740353767?mt=8" target="_blank"><img class="responsive appLogo" src="img/kdicLogo.png"></a> <a href="https://itunes.apple.com/us/app/s-b/id638912711?mt=8" target="_blank"><img class="responsive appLogo" src="img/sbLogo.png"></a> <a href="https://itunes.apple.com/us/app/grinnell-db/id726496362?mt=8" target="_blank"><img class="responsive appLogo" src="img/dbLogo.png"></a></p>
                </div>

                <div class="col-md-3">
                    <div class="peeps_block" id="patrick1">
                        <a href="#patrick"><img class="responsive" src="img/patrick.png"></a>

                        <p>Patrick</p>
                    </div>

                    <p><em>Patrick Triest</em><br>
                    Android Developer/Leader<br>
                    <a href="http://lnkd.in/b2yuUx9" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a><a href="https://github.com/triestpa" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a><a href="https://twitter.com/p_triest" target="_blank"><img class="responsive bioLogo" src="img/twitterLogo.png"></a> <a href="http://ptriest.com/" target="_blank"><img class="responsive bioLogo" src="img/home.png"></a><br>
                    <a href="https://play.google.com/store/apps/details?id=edu.grinnell.kdic&hl=en" target="_blank"><img class="responsive appLogo" src="img/kdicLogo.png"></a> <a href="https://play.google.com/store/apps/details?id=edu.grinnell.sandb" target="_blank"><img class="responsive appLogo" src="img/sbLogo.png"></a> <a href="https://github.com/GrinnellAppDev/Grinnell-Events-Android" target="_blank"><img class="responsive appLogo" src="img/eventsLogo.png"></a> <a href="https://play.google.com/store/apps/details?id=edu.grinnell.appdev.grinnelldirectory" target="_blank"><img class="responsive appLogo" src="img/dbLogo.png"></a></p>
                </div>

                <div class="col-md-3">
                    <div class="peeps_block" id="lea1">
                        <a href="#lea"><img class="responsive" src="img/lea.png"></a>

                        <p>Lea</p>
                    </div>

                    <p><em>Lea Marolt Sonnenschein</em><br>
                    iOS Developer/Designer<br>
                    <a href="https://si.linkedin.com/pub/lea-marolt-sonnenschein/31/b38/886/" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/leamars" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a> <a href="https://twitter.com/hellosunschein" target="_blank"><img class="responsive bioLogo" src="img/twitterLogo.png"></a> <a href="http://hellosunschein.com/" target="_blank"><img class="responsive bioLogo" src="img/home.png"></a><br>
                    <a href="https://itunes.apple.com/us/app/g-licious/id523738999?mt=8"><img class="responsive appLogo" src="img/gLiciousLogo.png"></a> <a href="https://itunes.apple.com/us/app/kdic/id740353767?mt=8" target="_blank"><img class="responsive appLogo" src="img/kdicLogo.png"></a> <a href="https://itunes.apple.com/us/app/s-b/id638912711?mt=8" target="_blank"><img class="responsive appLogo" src="img/sbLogo.png"></a> <a href="https://github.com/GrinnellAppDev/Grinnell-Events-iOS" target="_blank"><img class="responsive appLogo" src="img/eventsLogo.png"></a></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="peeps_block" id="spencer1">
                    <a href="#spencer"><img class="responsive" src="img/spencer.png"></a>

                    <p>Spencer</p>
                </div>

                <p><em>Spencer Liberto</em><br>
                Android Developer<br>
                <a href="https://www.linkedin.com/pub/spencer-liberto/54/310/986" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/liberto" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a><br>
                <a href="https://play.google.com/store/apps/details?id=edu.grinnell.kdic" target="_blank"><img class="responsive appLogo" src="img/kdicLogo.png"></a> <a href="https://play.google.com/store/apps/details?id=edu.grinnell.appdev.grinnelldirectory" target="_blank"><img class="responsive appLogo" src="img/dbLogo.png"></a></p>
            </div>
        </div>

        <div class="peeps">
            <div class="col-md-3">
                <div class="peeps_block" id="danielT1">
                    <a href="#danielT"><img class="responsive" src="img/danielT.png"></a>

                    <p>Daniel</p>
                </div>

                <p><em>Daniel Torres</em><br>
                iOS Developer<br>
                <a href="https://www.linkedin.com/pub/daniel-torres/68/151/b8b" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/torresda" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a><br>
                <a href="https://itunes.apple.com/us/app/s-b/id638912711?mt=8" target="_blank"><img class="responsive appLogo" src="img/sbLogo.png"></a> <a href="https://itunes.apple.com/us/app/kdic/id740353767?mt=8" target="_blank"><img class="responsive appLogo" src="img/kdicLogo.png"></a> <a href="https://itunes.apple.com/us/app/grinnell-db/id726496362?mt=8" target="_blank"><img class="responsive appLogo" src="img/dbLogo.png"></a></p>
            </div>

            <div class="col-md-3">
                <div class="peeps_block" id="tiffany1">
                    <a href="#tiffany"><img class="responsive" src="img/tiffany.png"></a>

                    <p>Tiffany</p>
                </div>

                <p><em>Tiffany Nguyen</em><br>
                Android Developer<br>
                <a href="https://www.linkedin.com/pub/tiffany-nguyen/82/a90/ab5" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/nguyenti" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a><br>
                <a href="https://github.com/GrinnellAppDev/Grinnell-Events-Android" target="_blank"><img class="responsive appLogo" src="img/eventsLogo.png"></a></p>
            </div>

            <div class="col-md-3">
                <div class="peeps_block" id="danielG1">
                    <a href="#danielG"><img class="responsive" src="img/danielG.png"></a>

                    <p>Daniel</p>
                </div>

                <p><em>Daniel Goldstein</em><br>
                Android Developer<br>
                <a href="https://www.linkedin.com/pub/daniel-goldstein/64/752/468" target="_blank"><img class="responsive bioLogo" src="img/linkedLogo.png"></a> <a href="https://github.com/goldstei1" target="_blank"><img class="responsive bioLogo" src="img/githubLogo.png"></a><br>
                <a href="https://play.google.com/store/apps/details?id=edu.grinnell.appdev.grinnelldirectory" target="_blank"><img class="responsive appLogo" src="img/dbLogo.png"></a></p>
            </div>
        </div>
    </div> -->

 <div class="container memberProfiles">


<!-- LEADERSHIP -->
<h1 style="background-color:; color:#c66161;">LEADERSHIP</h1>
<!--  LEA -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/lea.png" class="profile"/>
                    </br></br>

                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a>
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Lea Marolt Sonnenschein</h1>
                    Team Lead | Lead iOS Developer | Computer Science '15
                    </br></br>
                    <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- PATRICK -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle" >
                <center>
                    <h1>Patrick Triest</h1>
                    Team Lead | Lead Android Developer | Computer Science '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/patrick.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  NATHALIE -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/nathalie.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Nathalie Ford</h1>
                    Financial Manager | Computer Science '15
                    </br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- LARRY -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Larry Boateng Asante</h1>
                    Education Manager | Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/larry.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>



<!--  ALEX -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/alex.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Alex Mitchell</h1>
                    Team Lead in Training | iOS Developer | Computer Science & Mathematics '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- SAMEE -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Samee Zahid</h1>
                    Team Lead in Training | Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/samee.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!-- AJUNA -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/ajuna.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </br></br></br></br>
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Ajuna Kyaruzi</h1>
                    Financial Manager in Training | Computer Science '17

                    </center>
                </div>
                <div class="col-md-3">
                </div> 
            </div>



<!-- DEVELOPMENT -->

<h1 style="background-color:; color:#c66161; padding-top:30px; margin-top:100px;">DEVELOPMENT</h1>

<!-- SPENCER -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle" >
                <center>
                    <h1>Spencer Liberto</h1>
                    Android Developer | Computer Science '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/spencer.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  DANIEL T -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/danielT.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Daniel Torres</h1>
                    iOS Developer | Computer Science '15
                    </br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- PATRICK SLOUGH -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Patrick Slough</h1>
                    iOS Developer | Physics & Mathematics '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>



<!--  TY -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/ty.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Tyler Dewey</h1>
                    iOS Developer | Computer Science '16
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- DANIEL G -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Daniel Goldstein</h1>
                    Android Developer | Computer Science '16
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/danielG.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!-- TIFFANY -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/tiffany.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Tiffany Nguyen</h1>
                    Android Developer | Computer Science '16
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!--  SHAUN -->


            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Shaun Mataire</h1>
                    Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!-- AMANDA -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Amanda Hinchman-Dominguez</h1>
                    Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- MIKE-->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Michael Owusu</h1>
                    Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/michael.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!-- ALBERT -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Albert Owusu-Asare</h1>
                    Android Developer | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>


<!-- DESIGN & UX -->

<h1 style="background-color:; color:#c66161; padding-top:30px; margin-top:100px;">DESIGN & UX</h1>

<!-- CALEB -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle" >
                <center>
                    <h1>Caleb Sponheim</h1>
                    UX, Design, Human Factors | Psychology & Neuroscience '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/caleb.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  LEXY -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Lexy Greenwell</h1>
                    Design | Computer Science '15
                    </br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- SARAH -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Sarah Trop</h1>
                    Design | Computer Science '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>



<!--  HANNAH -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/hannah.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Hannah Cohn</h1>
                    UX | Computer Science '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- CHRIS -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Chris Lee</h1>
                    UX | Economics '15
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/chris.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!-- COMMUNITY -->

<h1 style="background-color:; color:#c66161; padding-top:30px; margin-top:100px;">COMMUNITY</h1>

<!-- CHLOE -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle" >
                <center>
                    <h1>Chloe Williams</h1>
                    Community Builder | History '16
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  JARREN -->

            <div class="col-md-12">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/jarren.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Jarren Santos</h1>
                    Commuity Builder | Biological Chemistry '15
                    </br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- MARK -->

            <div class="col-md-12">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Mark Schwabacher</h1>
                    Community Builder | Economics & Philosophy '17
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/mark.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<h1 style="background-color:; color:#c66161; padding-top:30px; margin-top:100px;">PAST MEMBERS</h1>

<!-- CHRISTINE -->

            <div class="col-md-12" style="background-color: #D8D8D8;">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle" >
                <center>
                    <h1>Christine Tran</h1>
                    Design | Computer Science & Art '16
                    </br></br>
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/christine.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  MAIJID -->

            <div class="col-md-12" style="background-color: #D8D8D8;">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/maijid.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Maijid Moujaled</h1>
                    Team Lead | Lead iOS Developer | Computer Science '14
                    </br></br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- COLIN -->

            <div class="col-md-12" style="background-color: #D8D8D8;">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Colin Tremblay</h1>
                    Senior iOS Developer | Computer Science '14
                    </br></br>
    
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

<!--  DAVID -->

            <div class="col-md-12" style="background-color: #D8D8D8;">

                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <center>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>
<!-- 
                    <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>David Cowden</h1>
                    Team Lead | Lead Android Developer | Computer Science '13
                    </br>

                    </center>
                </div>
                <div class="col-md-3">
                </div>
            </div>

<!-- DUGAN -->

            <div class="col-md-12" style="background-color: #D8D8D8;">

                <div class="col-md-3">
                </div>
                <div class="col-md-5 profileStyle">
                <center>
                    <h1>Dugan Knoll</h1>
                    Lead Developer | Computer Science '12
                    </br></br>
    
<!--                     <img class="responsive appLogo" src="img/sbLogo.png"></a>
                    <img class="responsive appLogo" src="img/eventsLogo.png"></a>
                    <img class="responsive appLogo" src="img/gLiciousLogo.png"></a> -->

                    </center>
                </div>

                <div class="col-md-2">
                    <center>
                    </br>
                    <img src="img/defaultPerson.png" class="profile"/>
                    </br></br>

<!--                     <img class="responsive bioLogo" src="img/home.png"></a>
                    <img class="responsive bioLogo" src="img/linkedLogo.png"></a>
                    <img class="responsive bioLogo" src="img/githubLogo.png"></a>
                    <img class="responsive bioLogo" src="img/twitterLogo.png"></a> -->
                    </center>

                </div>
                <div class="col-md-2">
                </div>
            </div>

</div>

</br>
</br>
</br>

<center>
<a class="fancybox" rel="gallery1" href="img/bloop.png" title="Something Witty"> 
<img src="img/bloop1-s.png" class="gallery" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop2.png" title="Something Witty"> 
<img src="img/bloop2-s.png" class="gallery" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop3.png" title="Something Witty"> 
<img src="img/bloop3-s.png" class="gallery" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop4.png" title="Something Witty"> 
<img src="img/bloop4-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop5.png" title="Something Witty"> 
<img src="img/bloop5-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop6.png" title="Something Witty"> 

</br>

<img src="img/bloop6-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop7.png" title="Something Witty"> 
<img src="img/bloop7-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop8.png" title="Something Witty"> 
<img src="img/bloop8-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop9.png" title="Something Witty"> 
<img src="img/bloop9-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop10.png" title="Something Witty"> 
<img src="img/bloop10-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop11.png" title="Something Witty"> 
<img src="img/bloop11-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop12.png" title="Something Witty"> 

</br>

<img src="img/bloop12-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop13.png" title="Something Witty"> 
<img src="img/bloop13-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop15.png" title="Something Witty"> 
<img src="img/bloop15-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop16.png" title="Something Witty"> 
<img src="img/bloop16-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop17.png" title="Something Witty"> 
<img src="img/bloop17-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop18.png" title="Something Witty"> 

</br>

<img src="img/bloop18-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop19.png" title="Something Witty"> 
<img src="img/bloop19-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop20.png" title="Something Witty"> 
<img src="img/bloop20-s.png" class="gallery" alt="" /> </a>
<a class="fancybox" rel="gallery1" href="img/bloop21.png" title="Something Witty"> 
<img src="img/bloop21-s.png" class="gallery" alt="" /> </a>
</center>

</br>
</br>
</br>

<script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
});
</script>

    <?php 
                    include('inc/footer.php'); 
                    ?>
</body>
</html>
