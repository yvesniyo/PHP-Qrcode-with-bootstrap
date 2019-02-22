<?php
$image="";
$size="";
$code="";
$type="";
if(isset($_POST['d']) ){
	$code=$_POST['d'];
	$size=$_POST['s'];
	$type=$_POST['t'];
$image="<img src='qr_img.php?d=$code&s=$size&t=$type'>";
?>

<?php	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-offset-4">
			<form class="form" action="index.php" method="POST">
				<div class="form-group">
					<label>Enter Keys</label>
					<input type="text" name="d" class="form-control" placeholder="<?php echo $code ?>">
				</div>
				<div class="form-group">
					<label>Enter Size</label>
					<input type="text" name="s" class="form-control" placeholder="<?php echo $size ?>">
				</div>
				<div class="form-group">
					<label>Select Format</label>
					<select name="t">
						<option value="j">JPEG</option>
						<option value="p">PNG</option>
					</select>
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success form-control" value="Generate QR code">
				</div>
				
			</form>
		</div>
		<div class="col-md-4">
			<?php echo $image;?>
		</div>
	</div>
</div>
</body>
</html>


<?php


