<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><?php
$ngayhomnay = date("Y-m-d"); //Lấy thời gian hiện tại 
$ngaysosanh = "2016-11-20"; // Năm/Tháng/Ngày
echo "Hôm nay là: ".$ngayhomnay;
echo "<br/>Ngày đó là: ".$ngaysosanh;
echo "<br/>";
echo "Kết quả so sánh: ";
if (strtotime($ngayhomnay) > strtotime($ngaysosanh)) {
echo "Ngày đó đã trôi qua...";
}elseif (strtotime($ngayhomnay) == strtotime($ngaysosanh)) {
echo "Chính là hôm nay đây ^^!";
}else{
echo "Ngày đó vẫn chưa tới...";
}
?>



<?php
  $date1 = new DateTime("2016-11-20");
  $date2 = new DateTime("2016-10-26");
  $ss = $date1->diff($date2);
  echo $ss->y . " years, " . $ss->m . " months, " . $ss->d . " days ";
?>
