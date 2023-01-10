<?php
session_start();

include("../includes/config.php"); 


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';

$L_ID = $_GET['L_ID'];


if(isset($_POST['Submit']))
{
$L_ID = mysqli_real_escape_string($dbConn,$_POST['L_ID']);
$Law_Update_Text = mysqli_real_escape_string($dbConn,$_POST['Law_Update_Text']);



 

$insert = mysqli_query($dbConn,"insert into laws_updates (Law_ID,Law_Update_Text) values ('$L_ID','$Law_Update_Text')");







echo "<script language='JavaScript'>
			  alert ('تم اضافة تحديث لمادة القانون بنجاح !');
      </script>";

	echo "<script language='JavaScript'>
document.location='Manage_Law_Updates.php?L_ID=".$L_ID."';
        </script>";

}

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
                    <li >
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">الرئيسية</span></a>

                    </li>
					
				
				
					
					
					
					
                       <li >
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">التصنيفات</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Category.php">اضافة تصنيف جديد</a></li>
                            <li><a href="View_Categories_List.php">عرض قائمة التصنيفات</a></li>

                        </ul>
                    </li>
					
					
					
					 
                       <li class="active">
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

          <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>القوانين والتعليمات والأنظمة</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>اضافة تحديث لمادة القانون</h5>
                        <div class="ibox-tools">
                            
                          
                           
                        </div>
                    </div>
                   
                        
                        
                        
                        
                          <div class="ibox-content">

                  
                  
                  
                  
                     <form method="post" action="Add_New_Law_Update.php?L_ID=<?php echo $L_ID; ?>" class="form-horizontal" enctype="multipart/form-data">
                                
									<input type="hidden" name="L_ID" value="<?php echo $L_ID; ?>"/>




	
								 <div class="form-group"><label class="col-sm-2 control-label">نص التحديث على القانون *</label>

                                    <div class="col-sm-10"><input value=""  type="text" name="Law_Update_Text" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>








							
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
																		                                        <button class="btn btn-primary" type="submit" name="Submit">اضافة</button>

									<button class="btn btn-danger" type="reset" name="Reset">حذف</button>

                                    </div>
                                </div>
                            </form>
                  
     
                        </div>

						
                        
                    </div>
                </div>
             
                 </div> </div>
                <div class="footer">
                   
                    <div>
<center>الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات © 2022. جميع الحقوق محفوظة </center>                    </div>
                </div>
            </div>
        </div>

        </div>
       



        </div>
    </div>

   <!-- Mainly scripts -->
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


      
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
 
 /*                   {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }    */
                   
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
</body>
</html>
