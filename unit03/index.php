<?php

function kiem_tra_chan_le($numb){
	if ($numb % 2 == 0){
		echo $numb . " Là số chẵn ! <br>";
	}
	else echo $numb . " Là số lẻ ! <br>";
}
kiem_tra_chan_le(12);

// !== : kiểm tra cả kiểu dữ liệu xem có giống nhau ko (===)

$name = array('Nam','Ngân','Khánh','Ngọc','Minh',1,1,3,4);

var_dump(in_array('Lan', $name));

echo " <br> Số lượng phần tử trong mảng: " . count($name);

// array_search
$index = array_search('Ngọc', $name);    
     
    if($index !== FALSE){
        echo " <br> Vị trí phần tử là: " . $index;
    }else{
        echo " <br> Không tìm thấy phần tử";
    }




// array_count_values
$arr = array(1,3,1,5,"zent",1,5,"zent");

$arr_result = array_count_values($arr);

  echo "<pre>";
    print_r($arr_result);
  echo "</pre>";

  array_push($arr, 'Quỳnh mất nết', 'Quỳnh xấu gái');
  var_dump($arr);

// array_pop
 $del = array_pop($arr); // tra ve phan tu da xoa

  echo "Phần tử bị xóa là : " . $del;

  echo "<pre>";
    print_r($arr);
  echo "</pre>";




  // Các hàm thông dụng xử lý chuỗi trong php
$name_1 ="Quỳnh - đã xấu thì chớ!";

// Cat chuoi theo ky tu mong muon
$data = explode(" ",$name_1);

echo "<pre>";
	print_r($data);
echo "</pre>";


// implode
$name_1 = implode(" ",$data);

echo $name_1;
// strlen-độ dài chuỗi
echo "<br> - Độ dài chuỗi: ".strlen($name_1);

//str_word_count Đếm số từ trong chuỗi
echo "<br> - Đếm số từ trong chuỗi: ".str_word_count($name_1);

// str_repeat lặp lại số lần
echo "<br>".str_repeat("<br>Anh có yêu em không ? <br>",10);

// str_replace thay thế chuỗi
echo "<br>".str_replace("Quỳnh","Mụ Quỳnh",$name_1);


echo "<br> Hàm băm dữ liệu:" .md5('Mẹ Quỳnh');

echo "<br> Hàm băm dữ liệu: " .sha1('Mẹ Quỳnh');

// substr-cắt(chuỗi, vị trí bắt đầu, vị trí kết thúc)
echo "<br> Cắt chuỗi con:".substr($name_1,2,10); // cat tu vi tri 2, chuoi con co do dai 10

echo "<br>".strstr($name_1,"xấu");

// strpos-Tim vi tri cua chuoi Con
echo "<br>".strpos($name_1,"xấu");



// Hàm ngày giờ

echo '<br>'. date("d/m/Y - H:i:s");
$dateint = mktime(0, 0, 0, 5, 6, 2019+5);
echo '<br>'. date('d/m/Y', $dateint); 


