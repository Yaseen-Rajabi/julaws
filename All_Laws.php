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

<title>الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات</title>
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
JU                        </div>
						
							
                    </li>
                    <li >
                        <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">الرئيسية</span></a>
                       
                    </li>
                    
                    
                    
                    
                     
                    
                    
                    
                    
                    
                    
                    
                    
                     <li >
                        <a href="About_Us.php"><i class="fa fa-question-circle"></i> <span class="nav-label">من نحن</span></a>
                       
                    </li>
                       
					
					 <li class="active">
                        <a href="All_Laws.php"><i class="fa fa-list"></i> <span class="nav-label">القوانين والأنظمة والتعليمات</span></a>
                       
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
                    <span class="m-r-sm text-muted welcome-message"><strong>اهلا وسهلا بكم في الجامعة الأردنية - دائرة الشؤون القانونية - القوانين والأنظمة والتعليمات</strong></span>
                </li>
				
				
			          
               
          
          
                <li class="dropdown">
                    
                    <ul class="dropdown-menu dropdown-messages">
                        
                        
                        <li class="divider"></li>
                        
                        
                    </ul>
                </li>
             


                
            </ul>

        </nav>
        </div>
         <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>القوانين والأنظمة والتعليمات</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong>قائمة القوانين والأنظمة والتعليمات<strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>معلومات قائمة القوانين والأنظمة والتعليمات</h5>
                        <div class="ibox-tools">
                            
                          
                           
                        </div>
                    </div>
                   
                        
                        
                        
                        
                          <div class="ibox-content">

                  
                  
                      <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                            <th>عنوان المادة</th>

                            <th>السنة الدراسية</th>
                            <th>اسم التصنيف</th>
							 <th>اسم التصنيف الاول</th>
                            <th>اسم التصنيف الثاني</th>
                            <th>اسم التصنيف الثالث</th>
							
                            <th>نص المادة</th>
							<th>التحديثات على القانون</th>
                           
                     
                       
                       
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					$sql1 = mysqli_query($dbConn,"select * from laws order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$L_ID = $row1['ID'];
						$Academic_Year = $row1['Academic_Year'];
						$Category_ID = $row1['Category_ID'];
						$Sub_Category_1 = $row1['Sub_Category_1'];
						$Sub_Category_2 = $row1['Sub_Category_2'];
						$Sub_Category_3 = $row1['Sub_Category_3'];
						
						$Title = $row1['Title'];
						$Details = $row1['Details'];
						$Add_Date_Time = $row1['Add_Date_Time'];
						
					$sql2 = mysqli_query($dbConn,"select * from categories where ID='$Category_ID'");
					$row2 = mysqli_fetch_array($sql2);
					$Category_Name = $row2['Category_Name'];
				



					?>
                    <tr class="grade">
                          <td><?php echo $Title; ?></td>

                          <td><?php echo $Academic_Year; ?></td>
                          <td><?php echo $Category_Name; ?></td>
						   <td><?php echo $Sub_Category_1; ?></td>
                          <td><?php echo $Sub_Category_2; ?></td>
                          <td><?php echo $Sub_Category_3; ?></td>
						  
                          <td><?php echo $Details; ?></td>
                    <td>     
                    <a href="Manage_Law_Updates.php?L_ID=<?php echo $L_ID; ?>" class="btn btn-primary btn-sm" role="button">التحديثات على القانون</a>
 </td>
                                       
 </tr>
                    
                    <?php
					}
					?>
                    
                    </tbody>
                    
                    </table>
                        </div>   
             
                    
                    
                    
                    
                    
                    
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
           
                 <div class="col-lg-12" style="margin-top:50px">
                <div class="wrapper wrapper-content">
                     

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
            oTable.$('td').editable( '../example_ajax.php', {
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
