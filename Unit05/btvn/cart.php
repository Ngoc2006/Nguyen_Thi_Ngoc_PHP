<?php 
	session_start();
	// session_destroy();
	$products = $_SESSION['cart']; 
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
		<h1 style="text-align: center;">DANH SÁCH SẢN PHẨM TRONG GIỎ HÀNG</h1>
		<a href="list_product.php" class="btn btn-primary" style="margin-left: 100px">Thêm mới</a>
		<?php 
            if (isset($_COOKIE['thongbao'])) {
        ?> 
            <div class="alert alert-success" style="width: 80%; margin-left: 100px;">
                <strong>Thông báo: </strong> <?php  echo $_COOKIE['thongbao']; ?>
                
            </div>
         <?php } ?>
         <?php 
            if (isset($_COOKIE['msg'])) {
        ?> 
            <div class="alert alert-danger" style="width: 80%; margin-left: 100px;">
                <strong>Thông báo: </strong> <?php  echo $_COOKIE['msg']; ?>
                
            </div>
         <?php } ?>
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
				$tong = 0;
				foreach ($products as $key => $product) {
					$i++;
					$tong += $product['Gia']*$product['SoLuong'];
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $product['MaSP']; ?></td>
					<td><?php echo $product['TenSP']; ?></td>
					<td>
						<a href="add.php?MaSP=<?php echo $product['MaSP'] ?>" class="btn btn-info">+</a>
						<?php echo $product['SoLuong']; ?>
						<a href="sub.php?MaSP=<?php echo $product['MaSP'] ?>" class="btn btn-info">-</a>	
						</td>
					<td><?php echo number_format($product['Gia']); ?></td>
					<td><?php echo number_format($product['Gia']*$product['SoLuong']); ?></td>	
				</tr>
				
				<?php } ?>
				<tr>
					<th colspan="5">Tổng tiền</th>
					<th><?php echo number_format($tong); ?></th>
				</tr>
				<tr>
					<?php $change = convert_number_to_words($tong);?>
					<td colspan="6"><p align="center"><i>Số tiền bằng chữ: <?php echo $change?> đồng</i></p></td>
				</tr>

			</tbody>

		</table>
		<a href="info.php" class="btn btn-danger" style="margin-left: 1082px;">Thanh toán</a>
 </body>
 </html> 