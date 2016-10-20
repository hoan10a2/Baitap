<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?> 



<?php




function ketnoi() {

	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'Student';
	
$conn = mysql_connect("$dbhost", "$username","$password") ;
 mysql_connect("$dbhost", "$username","$password") ; 
 
 
 mysql_select_db($db) ;



 return $conn ;
 
}  ;
	
ketnoi() ; 

echo ("Kết nối !!!") ;




function timkiem() {


$pS = $_POST['partialState'] ; 

$query = mysql_query("SELECT * FROM `states` WHERE `name` LIKE '%$pS%' ");


while ($query1  = mysql_fetch_array($query) ) {

	echo '<div>'.$query1['name'].'</div>';
	echo '<div>'.$query1['id'].'</div>';
	echo '<div>'.$query1['abbr'].'</div>';




  	# code...
  }  

}


echo timkiem()."Tìm kiếm ";


 

 
