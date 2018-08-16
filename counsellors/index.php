<?php
session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
<head>
    <title>Start Up Page</title>
    <link rel="stylesheet" type="text/css" href="../css/coverstyle.css">
    <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen
<!--    <script src="../jquery/jquery.min.js"></script>-->

</head>
    <div id="top-navbar">
        <div class="center-title"> <i>Egerton University Counselling Department.</i></div>
        </div>
<body>

<style>
    .mynotice {
        border: none;
        padding: 5px;
        font: 24px/36px sans-serif;
        width: 500px;
        height: 250px;
        overflow: scroll;
    }

    /* Scrollbar styles */
    ::-webkit-scrollbar {
        width: 12px;
        height: 12px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 10px olivedrab;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: yellowgreen;
        box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #7bac10;
    }
</style>


<div id="scroll" >
    <div id="side-navbar">

        <div id="side-links">
            <ul style="float: left;margin-left: 5px;">
                <li>
                <a href="../students/index.php"  style="color: #0000CC;font-size: 20px;">Students.</a>
                </li>
                <br>
                <li>
                <a href="counsellor.php"  style="color: #0000CC;font-size: 20px;" >Counsellors.</a>
                </li>
                <br>
                <li>
                <a href="../dean/dean.php"  style="color: #0000CC;font-size: 20px;">Deans.</a>
                    </li>
                <br>
                <li>
                <a href="#"  style="color: #0000CC;font-size: 20px;"" >About us.</a>
                </li>
                <br>
                <li>
                <a href="#"  style="color: #0000CC;font-size: 20px;">Contact us.</a>
                </li>
            </ul>
        </div>

    </div>
</div>

    <div id="maindiv">
        <br>
                                     <div id="salutation" style="width: 250px;height: 40px">
                                         <marquee behavior="alternate" scrolldelay="10" scrollamount="2">  <div class=title"> <center>Welcome.</center><i>for better & in time services.</i></div></marquee>
                                    </div>
                                        <!-- Slideshow container -->
                                        <div id="slideshow-container">

                                            <script src="../images/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
                                            <script type="text/javascript">
                                                jssor_1_slider_init = function() {

                                                    var jssor_1_SlideoTransitions = [
                                                        [{b:0,d:600,y:-290,e:{y:27}}],
                                                        [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
                                                        [{b:0,d:600,x:535,e:{x:27}}],
                                                        [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
                                                        [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
                                                        [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
                                                        [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
                                                        [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
                                                        [{b:2000,d:600,rY:30}],
                                                        [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
                                                        [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
                                                    ];

                                                    var jssor_1_options = {
                                                        $AutoPlay: 1,
                                                        $Idle: 2000,
                                                        $CaptionSliderOptions: {
                                                            $Class: $JssorCaptionSlideo$,
                                                            $Transitions: jssor_1_SlideoTransitions,
                                                            $Breaks: [
                                                                [{d:2000,b:1000}]
                                                            ]
                                                        },
                                                        $ArrowNavigatorOptions: {
                                                            $Class: $JssorArrowNavigator$
                                                        },
                                                        $BulletNavigatorOptions: {
                                                            $Class: $JssorBulletNavigator$
                                                        }
                                                    };

                                                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                                    /*#region responsive code begin*/

                                                    var MAX_WIDTH = 980;

                                                    function ScaleSlider() {
                                                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                                                        var containerWidth = containerElement.clientWidth;

                                                        if (containerWidth) {

                                                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                                            jssor_1_slider.$ScaleWidth(expectedWidth);
                                                        }
                                                        else {
                                                            window.setTimeout(ScaleSlider, 30);
                                                        }
                                                    }

                                                    ScaleSlider();

                                                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                                    /*#endregion responsive code end*/
                                                };
                                            </script>
                                            <link href="//fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
                                            <style>
                                                /*jssor slider loading skin spin css*/
                                                .jssorl-009-spin img {
                                                    animation-name: jssorl-009-spin;
                                                    animation-duration: 1.6s;
                                                    animation-iteration-count: infinite;
                                                    animation-timing-function: linear;
                                                }

                                                @keyframes jssorl-009-spin {
                                                    from { transform: rotate(0deg); }
                                                    to { transform: rotate(360deg); }
                                                }

                                                /*jssor slider bullet skin 052 css*/
                                                .jssorb052 .i {position:absolute;cursor:pointer;}
                                                .jssorb052 .i .b {fill: #ffffff;fill-opacity:0.3;}
                                                .jssorb052 .i:hover .b {fill-opacity:.7;}
                                                .jssorb052 .iav .b {fill-opacity: 1;}
                                                .jssorb052 .i.idn {opacity:.3;}

                                                /*jssor slider arrow skin 053 css*/
                                                .jssora053 {display:block;position:absolute;cursor:pointer;}
                                                .jssora053 .a {fill:none;stroke: #000000;stroke-width:640;stroke-miterlimit:10;}
                                                .jssora053:hover {opacity:.11;}
                                                .jssora053.jssora053dn {opacity:.8;}
                                                .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
                                            </style>


                                            <!--                                            This is for the dots and the next buttons-->
                                            <div id="jssor_1" style="position:relative;margin:0px 0px;top:0px;left:0px;width:980px;height:625px;overflow: auto;visibility:hidden;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/img/spin.svg" />
                                                </div>
                                                <div data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:980px;height:625px;overflow:hidden;">
                                                    <div>
                                                        <img data-u="image" src="../images/img/001.jpg" />
                                                        <div data-u="caption" data-t="0" style="position:absolute;top:730px;left:30px;width:500px;height:100px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(145,94,255,0.47);">Students happy after better services offered.</div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/002.jpg" />
                                                        <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                                            <div data-u="caption" data-t="1" style="position:absolute;top:-10px;left:30px;width:500px;height:40px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(145,94,255,0.47);">The Dean Office Department.</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/003.jpg" />
                                                        <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;">
                                                            <div data-u="caption" data-t="2" style="position:absolute;top:450px;left:-505px;width:500px;height:100px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(142,97,255,0.46);">A counsellor issuing services to students.</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/004.jpg" />
                                                        <div data-u="caption" data-t="3" style="position:absolute;top:500px;left:30px;width:500px;height:40px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(140,95,251,0.46);">Ass. Dean Mr. Omwoyo.</div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/005.jpg" />
                                                        <div data-u="caption" data-t="4" style="position:absolute;top:450px;left:30px;width:500px;height:100px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(140,95,251,0.47);">Real time services offered at the dean office department.</div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/006.jpg" />
                                                        <div data-u="caption" data-t="5" style="position:absolute;top:450px;left:600px;width:500px;height:100px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(143,96,255,0.47);">Always transforming lives through quality education.</div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/007.jpg" />
                                                        <div data-u="caption" data-t="6" style="position:absolute;top:450px;left:30px;width:500px;height:110px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(143,96,255,0.47);">The developers of the system at the counselling department.</div>
                                                    </div>
                                                    <div data-b="0">
                                                        <img data-u="image" src="../images/img/008.jpg" />
                                                        <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:100px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(140,95,251,0.47);">Sueu leaders from the dean office after consultations.</div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/009.jpg" />
                                                        <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                                            <div data-u="caption" data-t="8" data-ts="preserve-3d" style="position:absolute;top:25px;left:150px;width:250px;height:250px;overflow:hidden;background-color:rgba(40,177,255,0.47);">
                                                                <div data-u="caption" data-t="9" style="position:absolute;top:100px;left:25px;width:200px;height:50px; color: #FFFFFF;font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:2.08;">Do not be left out book appointment and get attended to.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img data-u="image" src="../images/img/010.jpg" />
                                                        <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                                            <div data-u="caption" data-t="10" style="position:absolute;top:25px;left:100px;width:300px;height:260px;color: #FFFFFF;font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:1.25;padding:15px 15px 15px 15px;box-sizing:border-box;background-color:rgba(40,177,255,0.46);background-clip:padding-box;">Booking appointments.<br /><br/>​

                                                                Everyone is <br />​Allowed to book appointments click

                                                                <a href="../studentloginPage.php" style="color: maroon">
                                                                    <i>Here</i>
                                                                </a>

                                                                <img src="../images/img/icon_chrome.png" /> to book.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Bullet Navigator -->
                                                <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                                    </svg>
                                                </div>
                                                <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                                    </svg>
                                                </div>
                                            </div>
                                            <script type="text/javascript">jssor_1_slider_init();</script>
                                            <!-- #endregion Jssor Slider End -->
                                        </div>




        <div style="float: right; margin-top: -430px; color: #0000CC;margin-right: 130px">
            <p>
                <script type="text/javascript">
                    tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                    tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                    function GetClock(){
                        var d=new Date();
                        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                        if(nhour==0){ap=" AM";nhour=12;}
                        else if(nhour<12){ap=" AM";}
                        else if(nhour==12){ap=" PM";}
                        else if(nhour>12){ap=" PM";nhour-=12;}

                        if(nmin<=9) nmin="0"+nmin;
                        if(nsec<=9) nsec="0"+nsec;

                        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                    }

                    window.onload=function(){
                        GetClock();
                        setInterval(GetClock,1000);
                    }
                </script>
            <div id="clockbox"></div>

            </p>

        </div>
        <br>
        <br>
        <div id="conditions">
            <hr><center> <h3 style="color: #0000CC;"><i>UPDATES</i></h3></center><hr>

            <!--The text below is not necessary on my opinion UPDATES alone is enough -->
            <!--                                        <h4>Notice showing counsellors who will not be available</h4>-->
            <!--                                        <img alt=" " height="25" src="images/icon-new.gif" width="50" />-->
            <div class= "mynotice">
                <?php
                include "../include/notices.php";

                $notice = new Notices();
                $notice->UnavailableCounsellors();
                ?>
            </div>
        </div>
        <hr>
        <div id="guide">
            <hr><h3 style="color: #0000CC; margin-left: 460px">GUIDELINES.</h3><hr>
            <center><p><strong><u>For successfull services kindly read the following steps before you log in:</u></strong></p></center>
            <div style="margin-left: 20px">
                <ul>
                    <li>For Students.</li>
                    <li>For Counsellors.</li>
                    <li>For Deans.</li>

                </ul>
            </div>

        </div>
        <br>
        <hr>
        <!-- Content Row -->
        <!-- /.col-md-3 -->
        <div class="row">
            <div class="col-md-3">
                <h3>Our Counsellors</h3>
                <p>Our counsellors are always committed ready to serve. Your participation as a student is highly regarded . Feel free and find help with us.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Our Mission</h3>
                <p>To provide day to day services to all students<br>
                    within Egerton-Njoro Campus and build a holistic and self drived citizens.
                </p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Announcements</h3>
                <p>November 1 : Counsellor1 will not be available <br>
                    December 10 : Counsellor meeting. No appointment booking <br>
                    December 22 : Long holiday break</p> <br>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Dean Office</h3>
                <p>All students are free for consultation<br>
                    between 8:00am to 4:30pm every day unless<br>
                    or otherwise stated.
                </p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
        </div>
    </div>


</body>
<div style="text-align: center;background-color: SteelBlue; color: white">
        &copy;Copyright 2018. <i>CodeBloode Sons Systems. </i>&checkmark;
    <br><br>
    </div>
</html>
