<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from categories where ID='$C_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('تم حذف التصنيف بنجاح !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Categories_List.php';
        </script>";

?>