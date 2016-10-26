<?php

function themdauso($strNum) {

    //Hàm thêm dấu chấm (.) vào một chuỗi số hàng ngàn
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;
}


function tinhsongay($d1,$d2) {

$date1 = new DateTime($d1);
$date2 = new DateTime($d2);
$ss = $date1->diff($date2);
return $ss;
}
 








?>