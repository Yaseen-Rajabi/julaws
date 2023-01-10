<?php
session_start();

$L_ID=$_GET['L_ID'];
$LU_ID=$_GET['LU_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from laws_updates where ID='$LU_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('تم حذف تحديث المادة بنجاح !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Manage_Law_Updates.php?L_ID=".$L_ID."';
        </script>";

?>