<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?> 

<table  cellpadding="5" cellspacing="5" width="70%" >


<html>
<head>

<tr>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <form name = "searchdate" method = "POST" action =""> 


	 <input type="date" name="date1" value=""/>
	 <input type="date" name="date2" value=""/>

			<input type="submit" id="clickme" name="clickme" value="Nhập ngày tháng">	

	
		</form>




<?php

require_once "common.php";


echo 'Đây là nội dung trả về'."<br>";

if ($_POST) {
	$dt1    = $_POST ['date1'] ;
  	$dt2    = $_POST ['date2'] ;
  	$row = isset($_POST['clickme']) ? 1 : 0;


  	if (!$row ) 
  {  
    echo "Vui lòng điền đúng ngày ";
    }

  else {
          $rs = tinhsongay("$dt1","$dt2");
 			echo $rs->d . " days ";

 			}
}

  

  







?>
