<?php 
	// session_start();
	// session_destroy();
	// $products = $_SESSION['cart']; 
	include_once('change.php');
 ?>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="content">
		<h1 style="text-align: center;">DANH SÁCH SẢN PHẨM BẠN CHỌN</h1>
		<table class="table" style="margin-left: 100px;width: 80%;">
			<tr style="font-size: 15px; background-color: #222222; color: white;" class="thead-dark">
				<td scope="col">STT</td>
				<td scope="col">Mã SP</td>
				<td scope="col">Tên SP</th>
				<td scope="col">Số lượng</td>
				<td scope="col">Giá bán</td>
				<td scope="col">Thành Tiền</td>
			</tr>	
			<tbody>
				<?php 
				$i = 0;
				$tong = 0;
				foreach ($products as $key => $product) {
					$i++;
					$tong += $product['Gia']*$product['SoLuong'];
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $product['MaSP']; ?></td>
					<td><?php echo $product['TenSP']; ?></td>
					<td><?php echo $product['SoLuong']; ?>
					<td><?php echo number_format($product['Gia']); ?></td>
					<td><?php echo number_format($product['Gia']*$product['SoLuong']); ?></td>	
				</tr>
				
				<?php } ?>
				<tr>
					<th colspan="5" style="padding-left: 0px;">Tổng tiền</th>
					<th><?php echo number_format($tong); ?></th>
				</tr>
				<tr>
					<?php $change = convert_number_to_words($tong);?>
					<td colspan="6"><p align="center"><i>Số tiền bằng chữ: <?php echo $change?> đồng</i></p></td>
				</tr>

			</tbody>

		</table>
		
 </body>
 </html> 