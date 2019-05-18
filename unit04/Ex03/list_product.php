<?php 

include_once('data.php');


?>

<!DOCTYPE html>
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
		<h1 style="text-align: center;">DANH SÁCH SẢN PHẨM</h1>
		<table class="table" style="margin-left: 100px;width: 80%;">
			<thread>
				<th>STT</th>
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Action</th>
			</thread>
			<tbody>
				<?php 
				$i = 0;
				foreach ($products as $key => $product) {
					$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $product['MaSP']; ?></td>
						<td><?php echo $product['TenSP']; ?></td>
						<td><?php echo $product['SoLuong']; ?></td>
						<td><?php echo $product['Gia']; ?></td>
						<td><a href="add2cart.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-success">ADD 2 CART</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</center>
	<a href="cart.php" class="btn btn-danger" style="margin-left: 47%">Xem lại giỏ hàng</a>
</div>
</body>
</html>