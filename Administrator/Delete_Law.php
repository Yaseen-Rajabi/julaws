<?php
session_start();

$L_ID=$_GET['L_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from laws_updates where Law_ID='$L_ID'");
mysqli_query($dbConn,"delete from laws where ID='$L_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('تم حذف المادة بنجاح !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Laws_List.php';
        </script>";

?>