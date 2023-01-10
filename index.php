<?php
session_start();

include("includes/config.php"); 


?>
<!DOCTYPE html>
<html dir="rtl">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>اﻟﺠﺎﻣﻌﺔ اﻷﺭﺩﻧﻴﺔ - ﺩاﺋﺮﺓ اﻟﺸﺆﻭﻥ اﻟﻘﺎﻧﻮﻧﻴﺔ - اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png"/>
 
 <style>
@font-face {
   font-family: myFirstFont;
   src: url(fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont !important;
}

</style>



<style>
.mySlides {display:none;}
</style>


</head>

<body style="back" class="rtls">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" style="border-radius: 10%;" src="img/logo2.jpg" width="100%"/>
                             </span>
        

                          
                        </div>
                        <div class="logo-element">
                        JU
                        </div>
      
       
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">اﻟﺮﺋﻴﺴﻴﺔ</span></a>
                       
                    </li>
                    
                    
                    
                    
                     
                    
                    
                    
                    
                    
                    
                     <li>
                        <a href="About_Us.php"><i class="fa fa-question-circle"></i> <span class="nav-label">ﻣﻦ ﻧﺤﻦ</span></a>
                       
                    </li>
                       
     
      <li>
                        <a href="All_Laws.php"><i class="fa fa-list"></i> <span class="nav-label">اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ</span></a>
                       
                    </li>
                    
     
       
                    
                    
                    
                  

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">


<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>  
            
      

    
 
   
        </div>
            <ul class="nav navbar-top-links navbar-right">
<br>


   <li>
                    <span class="m-r-sm text-muted welcome-message"><strong>اﻫﻼ ﻭﺳﻬﻼ ﺑﻜﻢ ﻓﻲ اﻟﺠﺎﻣﻌﺔ اﻷﺭﺩﻧﻴﺔ - ﺩاﺋﺮﺓ اﻟﺸﺆﻭﻥ اﻟﻘﺎﻧﻮﻧﻴﺔ - اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ</strong></span>
                </li>
    
    
                
               
          
          
                <li class="dropdown">
                    
                    <ul class="dropdown-menu dropdown-messages">
                        
                        
                        <li class="divider"></li>
                        
                        
                    </ul>
                </li>
             


                
            </ul>

        </nav>
        </div>
            
        <div class="row" style="margin-top:10px">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                       
                        
                     
                            
                            
                            
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>اﻟﺠﺎﻣﻌﺔ اﻷﺭﺩﻧﻴﺔ - ﺩاﺋﺮﺓ اﻟﺸﺆﻭﻥ اﻟﻘﺎﻧﻮﻧﻴﺔ - اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ</h5>

                                       
                                   
                                    </div>
                                  


                                    <div class="ibox-content" style="overflow:hidden">

                                        <div>
                                            <div class="feed-activity-list">

                                                <div class="feed-element">
                                                    
                                                    <div class="widget navy-bg no-padding" style="background:none">
                                                        <strong><center>
                                                        
                                                      
                    
        



<br><br>

<style>
	.w3-animate-fading	{animation:fading 9s infinite}@keyframes 
	fading {	0%	 {opacity:0; }
				50%	 {opacity:1; }
				75%  {opacity:1; }
				100% {opacity:0; }
			}
</style>

<div class="w3-content">
	
  <img class="mySlides w3-animate-fading" src="img/slider1.png" style="width:1024px; height:500px; !important">
  <img class="mySlides w3-animate-fading" src="img/slider2.jpg" style="width:1024px; height:500px; !important">
  <img class="mySlides w3-animate-fading" src="img/slider3.jpg" style="width:1024px; height:500px; !important">
  <img class="mySlides w3-animate-fading" src="img/slider4.jpg" style="width:1024px; height:500px; !important">
  <img class="mySlides w3-animate-fading" src="img/slider5.jpg" style="width:1024px; height:500px; !important">
  <img class="mySlides w3-animate-fading" src="img/slider6.jpg" style="width:1024px; height:500px; !important">
<br>
  <button class="btn btn-primary" onclick="plusDivs(-1)">&#10094;</button>
  <button class="btn btn-primary" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

<!-- Slide images auto change -->

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); // Change image every 8 seconds
}
</script>




<br><br>

<h4><p style="line-height: 2; color:#000"> 

اﻟﺠﺎﻣﻌﺔ اﻷﺭﺩﻧﻴﺔ - ﺩاﺋﺮﺓ اﻟﺸﺆﻭﻥ اﻟﻘﺎﻧﻮﻧﻴﺔ - اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ

</p></h4>



     
                         
                         </center></strong>

                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                
                                             
                                                
                                               
                                               
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                         
                </div>
                
                
                
                
<!--


First Row

-->                                
   

   
   
    <div class="row">
           
     <div class="col-lg-12" style="margin-top:50px">
                <div class="wrapper wrapper-content">
                     

                <div class="footer">
                   
                    <div>
                  
                       <center>اﻟﺠﺎﻣﻌﺔ اﻷﺭﺩﻧﻴﺔ - ﺩاﺋﺮﺓ اﻟﺸﺆﻭﻥ اﻟﻘﺎﻧﻮﻧﻴﺔ - اﻟﻘﻮاﻧﻴﻦ ﻭاﻷﻧﻈﻤﺔ ﻭاﻟﺘﻌﻠﻴﻤﺎﺕ © 2022. ﺟﻤﻴﻊ اﻟﺤﻘﻮﻕ ﻣﺤﻔﻮﻇﺔ </center>
                    </div>
                </div>
            </div>
        </div>

        </div>
       



        </div>
    </div>

   <!-- Mainly scripts -->
    
    

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>





    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#fae755", "#ff8800"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>

</body>
</html>
