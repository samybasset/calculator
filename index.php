<?php include 'oop.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method='post'>
		<div class="calc">
			<div class="display"></div>
			<div class="controls">
				<div class="numbers">
					<input type="submit" name='1' value='1'>
					<input type="submit" name='2' value='2'>
					<input type="submit" name='3' value='3'>
					<input type="submit" name='4' value='4'>
					<input type="submit" name='5' value='5'>
					<input type="submit" name='6' value='6'>
					<input type="submit" name='7' value='7'>
					<input type="submit" name='8' value='8'>
					<input type="submit" name='9' value='9'>
					<input type="submit" name='0' value='0'>
					<input type="submit" name='null' value='d' style='visibility: hidden;'>
					<input type="submit" name='=' value='='>
				</div>
				<div class="operators">
					<input type="submit" name='+' value='+'>
					<input type="submit" name='-' value='-'>
					<input type="submit" name='/' value='/'>
					<input type="submit" name='x' value='x'>
				</div>
			</div>
		</div>
	</form>
</body>
</html>