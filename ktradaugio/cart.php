<!DOCTYPE html>
<?php
session_start(); 
include_once("change.php");
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
		<h1 style="text-align: center;">DANH SÁCH SẢN PHẨM TRONG GIỎ HANG</h1>
		<table class="table" style="margin-left: 100px;width: 80%;">
			<thread>
				<th>STT</th>
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Thành Tiền</th>
			</thread>	
			<tbody>
				<?php 


				$i = 0;
				$tongTien= 0;
				foreach ($_SESSION['cart']	 as $key => $product) {
					$i++;
					$tongTien= $tongTien + $product['SoLuong'] * $product['Giaban'];
					
					?>
					<tr>
						<th><?php echo $i; ?></th>
						<th><?php echo $product['MaSP']; ?></th>
						<th><?php echo $product['TenSP']; ?></th>
						<th>
							<a href="add2cart.php?MaSP=<?php echo $product['MaSP']; ?> " class="btn btn-success">+</a>
							<?php echo $product['SoLuong']; ?>
							<a href="delete.php?MaSP=<?php echo $product['MaSP']; ?> " class="btn btn-danger">-</a>	
							</th>
						<th><?php echo number_format($product['Giaban']) ?></th>
						<th><?php echo number_format($product['SoLuong'] * $product['Giaban']) ; ?></th>

					</tr>
					<?php
				}
				?>
				<tr>
					<th colspan="5" style="text-align: left;">Tổng Thanh Toán</th>
					<th colspan="1"><?php echo number_format($tongTien)?></th>
				</tr>
				<tr>
					<?php $change = convert_number_to_words($tongTien);?>
					<td colspan="6"><p align="center"><i>Số tiền bằng chữ: <?php echo $change?></i></p></td>
				</tr>
			</tbody>
			
		</table>
 	
 </body>
 </html> 
