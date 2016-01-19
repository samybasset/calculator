<?php include 'oop.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">

</head>
<body>
		<div class="calc">
			<div class="display">
        <span>
        </span>
      </div>
			<div class="controls">
				<div class="numbers">
					<form method='post'><input type="submit" name='num' value='1'></form>
					<form method='post'><input type="submit" name='num' value='2'></form>
					<form method='post'><input type="submit" name='num' value='3'></form>
					<form method='post'><input type="submit" name='num' value='4'></form>
					<form method='post'><input type="submit" name='num' value='5'></form>
					<form method='post'><input type="submit" name='num' value='6'></form>
					<form method='post'><input type="submit" name='num' value='7'></form>
					<form method='post'><input type="submit" name='num' value='8'></form>
					<form method='post'><input type="submit" name='num' value='9'></form>
					<form method='post'><input type="submit" name='num' value='0'></form>
					<form method='post'><input type="submit" name='null' value='d' style='visibility: hidden;'></form>
					<form method='post'><input type="submit" name='=' value='='></form>
				</div>
				<div class="operators">
					<form method='post'><input type="submit" name='operator' value='+'></form>
					<form method='post'><input type="submit" name='operator' value='-'></form>
					<form method='post'><input type="submit" name='operator' value='/'></form>
					<form method='post'><input type="submit" name='operator' value='x'></form>
				</div>
        <?php 
            if(isset($_POST['='])) {
              $sum = new Sum(12, 3);
              echo "<script>$('.display span').append('".$sum->makeSum(12, 3)."');</script>";
            }
          ?>
			</div>
		</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</html>