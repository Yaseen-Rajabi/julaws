<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';




$sql1 = mysqli_query($dbConn,"select * from categories");
	$row1 = mysqli_num_rows($sql1);	
		
		


$sql3 = mysqli_query($dbConn,"select * from laws");
	$row3 = mysqli_num_rows($sql3);	




		
?>
<!DOCTYPE html>
<html dir="rtl">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات | مدير النظام</title>

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
   font-family: myFirstFont;
}

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
JU                        </div>
						
							
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">الرئيسية</span></a>

                    </li>
					
				
				
					
					
					
					
					

                       <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">التصنيفات</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Category.php">اضافة تصنيف جديد</a></li>
                            <li><a href="View_Categories_List.php">عرض قائمة التصنيفات</a></li>

                        </ul>
                    </li>
					
					
					
					 
                       <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">القوانين والتعليمات والأنظمة</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Law.php">اضافة قانون جديد</a></li>
                            <li><a href="View_Laws_List.php">عرض قائمة القوانين والتعليمات والأنظمة</a></li>

                        </ul>
                    </li>
					
					
					 
                    
					


  


					

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">اهلا وسهلا في الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات - مدير النظام</span>
                </li>
                <li>
                <span style="text-align:left;"><a href="../index.php">واجهة المستخدم</a></span>
                </li>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-messages">


                        <li class="divider"></li>


                    </ul>
                </li>



                <li>
                    <a href="Logout.php">
                        <i class="fa fa-sign-out"></i> خروج
                    </a>
                </li>

            </ul>

        </nav>
        </div>

        <div class="row">
            <div class="col-lg-12" style="background-color:#fff">
                <div class="wrapper wrapper-content">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات - مدير النظام</h5>
                                        
                                    </div>

                                    
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">

                                                <div class="feed-element">

                                                    <div class="media-body ">
												
													
                                                        <strong><center>
														
													
  <br>
                <br>
														<img src="img/logo.png" width="20%"/>
														</center></strong>

                                                    </div>



                                                </div>






                                            </div>


                                        </div>

                                    </div>
                                </div>
								
								
					
					
								
								
			<div class="col-lg-6" >
                <div class="widget style1 lazur-bg" style="background-color:#04488e">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
										<a style="color:#fff" href="View_Laws_List.php">

										<h3> مجموع القوانين</h3>
										<h2 class="font-bold"> <?php echo $row3; ?></h2>
										</a>
                        </div>
                    </div>
                </div>
            </div>	
								
								
								
								
							
								
								
			
								
								
								
								
						
								
								
						

<div class="col-lg-6" >
                <div class="widget style1 lazur-bg" style="background-color:#04488e">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
										<a style="color:#fff" href="View_Categories_List.php">

										<h3> مجموع التصنيفات</h3>
										<h2 class="font-bold"> <?php echo $row1; ?></h2>
										</a>
                        </div>
                    </div>
                </div>
            </div>	
								
								
							
								
								
								
								
								
								
								
								
								

                            </div>


                        </div>
                </div>
             </div></div>

                <div class="footer">

                    <div>
                       <center>الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات © 2022. جميع الحقوق محفوظة </center>
                    </div>
                </div>
            </div>
        </div>

        </div>




        </div>
    </div>
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


   
</body>
</html>
