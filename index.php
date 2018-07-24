<?php
session_start();
?>

<!--<!DOCTYPE HTML>-->
<!--<!-- remember to add footer for the one who is doing front-end -->
<!--<div class="footer" style="background-color: steelblue; color: skyblue"> <p>  &copy;Copyright CodeBloode Sons Systems 2018. &checkmark; </p></div>-->
<!--<HTML lang="en">-->
<!--	<head>-->
<!--	<meta charset="UTF-8">-->
<!--	-->
<!--	<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--		<title>student homepage</title>-->
<!--		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=1.0">-->
<!--    <meta http-equiv="x-ua-compatible" content="ie=edge">-->
<!---->
<!--		<!--<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all"> -->
<!--		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/font-awesome.min.css">-->
<!--		 <!-- Bootstrap core CSS -->
<!--    <link href="bootstrap/bootstrapcss/bootstrap.min.css" rel="stylesheet">-->
<!---->
<!--		    <!-- Material Design Bootstrap -->
<!--    <link href="bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.css">-->
<!--    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/mdb.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.css">-->
<!--    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.css">-->
<!--     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.min.css">-->
<!---->
<!---->
<!---->
<!--    <!-- SCRIPTS -->
<!--    <!-- JQuery -->
<!--    <script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>-->
<!--   <!--  Bootstrap tooltips -->
<!--    <script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>-->
<!--   <!--  Bootstrap core JavaScript -->
<!--   <script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>-->
<!--    <!-- MDB core JavaScript -->
<!--    <script type="text/javascript" src="bootsrap/bootstrapjs/mdb.min.js"></script>-->
<!---->
<!--    <!-- Your custom styles (optional) -->
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--	</head>-->
<!--<body >-->
<!--	-->
<!--	<!--include other php code extension-->
<!-- -->
<!---->
<!--           <div class="topnav" style="background-color: forestgreen">-->
<!--            <a href="students/logout.php"> Logout </a>-->
<!--            -->
<!--             <a href="bookedSsnPage.php">Booked Sessions</a>-->
<!--             <a href="studentbookappPage.php">Book Appointment</a>-->
<!--             <a class="active" href="#"> Home </a>-->
<!---->
<!--		  </div>-->
<!---->
<!---->
<!---->
<!--<div style="height: 100vh>-->
<!--        <div class="flex-center flex-column"  >-->
<!--            <h2 class="animated fadeIn mb-4" style="margin-top:150px ;margin-left:500px; "> Welcome, --><?php //echo $_SESSION['StudentName']; ?><!-- </h2>-->
<!---->
<!--            <h5 class="animated fadeIn mb-3 " style="margin-top:40px ;margin-left:400px;">Thank you for login our System. We're glad you're with us.</h5>-->
<!---->
<!--            <p class="animated fadeIn text-muted" style="margin-top:40px ;margin-left:620px; ">Egerton university</p>-->
<!--        </div>-->
<!--    </div>-->

<!DOCTYPE HTML>

<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/coverstyle.css">
    <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
    <script src="jquery/jquery.min.js"></script>

</head>
    <div id="top-navbar">
        <div class="center-title"> <i>Egerton University Counselling Department.</i></div>
        </div>
<body>

<!--    This code purpose is for ajax animations only during page load-->
<div class="se-pre-con"></div>
<style>
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(images/submitting.gif) center no-repeat #fff;
    }
</style>
<!--    This is used to load the animation during fetching the data from the database to display for the records that are available-->
<script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>

<!--   The ajax animation page load ends here -->

<div id="scroll" >
    <div id="side-navbar">

        <div id="side-links">
            <ul style="float: left;margin-left: 5px;">
                <li>
                <a href="student.php" style="color: #721c24;font-size: 20px">Students.</a>
                </li>
                <br>
                <li>
                <a href="counsellors/counsellorloginPage.php" style="color: #721c24;font-size: 20px;" >Counsellors.</a>
                </li>
                <br>
                <li>
                <a href="dean/adminlogin.php" style="color: #721c24;font-size: 20px" >Deans.</a>
                    </li>
                <br>
                <li>
                <a href="#" style="color: #721c24;font-size: 20px" >About us.</a>
                </li>
                <br>
                <li>
                <a href="#" style="color: #721c24;font-size: 20px" >Contact us.</a>
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

                                            <!-- Full-width images with number and caption text -->
                                            <div class="mySlides fade">
                                                <div class="numbertext">1 / 7</div>
                                                <img src="images/slider1.jpg" style=""  width="550" height="350">
                                                <div class="text">Counsellor in her office issuing services to the student.</div>
                                            </div>

                                            <div class="mySlides fade">
                                                <div class="numbertext">2 / 7</div>
                                                <img src="images/slider2.jpg" style=""  width="550" height="350">
                                                <div class="text">The Student Dean Department.</div>
                                            </div>

                                            <div class="mySlides fade">
                                                <div class="numbertext">3 / 7</div>
                                                <img src="images/slider3.jpg" style=""  width="550" height="350">
                                                <div class="text">Students Happy After Better Services Offered.</div>
                                            </div>

                                            <div class="mySlides fade">
                                                <div class="numbertext">4 / 7</div>
                                                <img src="images/slider4.jpg" style=""  width="550" height="350">
                                                <div class="text">Assistant Dean of Students.</div>
                                            </div>

                                            <div class="mySlides fade">
                                                <div class="numbertext">5 / 7</div>
                                                <img src="images/slider5.jpg" style=""  width="550" height="350">
                                                <div class="text">Office of the Dean Njoro Campus.</div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">6 / 7</div>
                                                <img src="images/slider6.jpg" style=""  width="550" height="350">
                                                <div class="text">Students at the Dean Office.</div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">7 / 7</div>
                                                <img src="images/slider7.jpg" style=""  width="550" height="350">
                                                <div class="text">Ass. Dean - Mr. Omwoyo</div>
                                            </div>


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
                                        <br>
                                        <br>
                                        <!-- The dots/circles -->
                                        <div style="float: left; margin-left: 230px">
                                            <span class="dot" onclick="currentSlide(1)"></span>
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                            <span class="dot" onclick="currentSlide(3)"></span>
                                            <span class="dot" onclick="currentSlide(4)"></span>
                                            <span class="dot" onclick="currentSlide(5)"></span>
                                            <span class="dot" onclick="currentSlide(6)"></span>
                                            <span class="dot" onclick="currentSlide(7)"></span>
                                        </div>

    <div style="float: right; margin-top: -480px; color: blue;margin-right: 130px">
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
                                    <div id="conditions">
                       <hr><center> <h3 style="color: #0000CC;">NOTICE:</h3></center><hr>
                                        <?php "include/notices.php";?>

                                    </table>
                                    </div>
                                    <div id="guide">
                                            <hr><h3 style="color: #0000CC; margin-left: 460px">GUIDELINES.</h3><hr>
                                        <center><p><strong><u>For successfull services kindly read the following steps before you log in:</u></strong></p></center>
<div style="margin-left: 20px">
<ul>
    <li>For Students.</li>
    <li>For Cansellors.</li>
    <li>For Deans.</li>

</ul>
</div>

                                                    </div>
                                                        <br>
                                                                </div>

                                        <script type="text/javascript">
                                            var slideIndex = 0;
                                            showSlides();

                                            function showSlides() {
                                                var i;
                                                var slides = document.getElementsByClassName("mySlides");
                                                var dots = document.getElementsByClassName("dot");
                                                for (i = 0; i < slides.length; i++) {
                                                    slides[i].style.display = "none";
                                                }
                                                slideIndex++;

                                                if (slideIndex > slides.length) {slideIndex = 1}
                                                slides[slideIndex-1].style.display = "block";

                                                for (i = 0; i < dots.length; i++) {
                                                    dots[i].className = dots[i].className.replace(" active", "");
                                                }
                                                dots[slideIndex-1].className += " active";
                                                setTimeout(showSlides, 10000); // Change image every 4 seconds
                                            }

                                        </script>
</body>
<div style="text-align: center;background-color: SteelBlue; color: white">
        &copy;Copyright 2018. <i>CodeBloode Sons Systems. </i>&checkmark;
    <br><br>
    </div>
</html>
