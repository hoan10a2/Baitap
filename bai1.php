<?php 
 
echo 'Đây là nội dung trả về';

// Nhập giá trị number bằng phương thức post
$number = isset($_POST['number']) ? (int)$_POST['number'] : false;
 
// Kiểm tra number có lớn hơn không hay không
if (!$number){
    die ('<h1>Vui lòng nhập một số lớn hơn không (0)</h1>');
}
 
// Lặp từ 1 tới number để in ra màn hình
for ($i = 1; $i <= $number; $i++){
    echo '<li>Số: '.themdauso($i).'</li>';

}
 function themdauso($number) {

    //Hàm thêm dấu chấm (.) vào một chuỗi số hàng ngàn
 
        $len = strlen($number);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($number, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($number, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;
}

?>