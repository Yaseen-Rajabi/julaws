<?php
session_start();

include "../includes/config.php";

$_SESSION['A_Log']=0;

echo "<script language='JavaScript'>
			  alert ('تم الخروج بنجاح !');
      </script>";	
	  
echo '  <script language="JavaScript">
            document.location="../Admin_Login.php";
        </script>';




?>

