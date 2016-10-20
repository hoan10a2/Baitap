<?php

function cong_tru($a,$b) {

	$tong = $a + $b ; 

	$hieu = $a - $b ;


	$man = array($tong,$hieu) ; 
	return $man ; 

	

} 


$tong_hieu =  cong_tru(5,12) ;


echo "Tổng là " .$tong_hieu[0] ."<br>"; 
echo "Tổng là " .$tong_hieu[1] ."<br>";


echo "<hr>" ; 



$hi = "Out of range " ; 


function hello() {

	Global $hi ; 

	$hi = "Liao xu " ; 

	echo $hi ; 
}

echo "<hr>" ; 

echo "<br>" ; 

hello(); 




    function demo123(){
        $name= array("Kenny", "Jiro", "Calvin", "Gillian");
        foreach ($name as $test){ 
            echo "$test<br>"; 
        }
    }
    demo123();








