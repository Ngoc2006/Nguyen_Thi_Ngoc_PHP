<?php
session_start();
// session_destroy();
$products = $_SESSION['cart'];

?>
<?php 
$unset = "";
if (isset($_COOKIE['unset'])) {
	$unset = $_COOKIE['unset'];
}
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
		<h1 style="text-align: center;">GIỎ HÀNG</h1>
		<?php 
            if (isset($_COOKIE['unset'])) {
        ?> 
            <div class="alert alert-success" style="text-align: center;">
                <?php  echo $_COOKIE['unset']; ?>
                
            </div>
         <?php } ?>
		<table class="table" style="margin-left: 80px;width: 80%;">
			<thread>
				<th>STT</th>
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Thành tiền</th>
				<th>Action</th>
			</thread>
			<tbody>
				<?php 
				$i = 0;
				$Tong = 0;
				foreach ($products as $key => $product) {
					$i++;
					$Tong = $Tong + $product['Gia']*$product['SoLuong'];
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $product['MaSP']; ?></td>
						<td><?php echo $product['TenSP']; ?></td>
						<td>
							<a href="add2cart.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-success">+</a>
							<?php echo $product['SoLuong']; ?>
							<a href="delete.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-warning">-</a> 
						</td>
						<td><?php echo number_format($product['Gia']) ?></td>
						<td><?php echo number_format($product['Gia']*$product['SoLuong']) ?></td>
						<td><a href="unset.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-danger">x</a></td>
					</tr>
				<?php } ?>
				<tr>
					<td>Tổng</td>
					<td><?php echo $Tong; ?></td>
				</tr>
				
			</tbody>
		</table>
	</center>
	<a href="list_product.php" class="btn btn-danger" style="margin-left: 44%">Tiếp tục mua hàng</a>
</div>
</body>
</html>