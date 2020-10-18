<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="max-width: 500px">
	<div class="col-sm-8">
		<h2 class="text-center">Calculator</h2>
		<form action="" method="GET">	
			<div class="form-group">
				<label for="email">First Number:</label>
				<input class="form-control" name="one" type="number">
			</div>
			<div class="form-group">
				<label for="pwd">Second Number:</label>
				<input class="form-control" name="two" type="number">
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="cal">Submit</button>
		</form>
	</div>
  	<div class="col-sm-4">
	<?php
		class calculator{
			function add($one, $two){
				echo "Addition: ";
				echo $one+$two.'</br>';
			}
			function sub($one, $two){
				echo "Subtruction: ";
				echo $one-$two.'</br>';
			}
			function mul($one, $two){
				echo "Multiplication: ";
				echo $one*$two.'</br>';
			}
			function div($one, $two){
				echo "Divition: ";
				echo $one/$two.'</br>';
			}		
			function mod($one, $two){
				echo "Modulus: ";
				echo $one%$two.'</br>';
			}		
		}
	?>  		
  	</div>
</div> 
</body>
</html>

<?php
if (isset($_GET['cal'])) {

	$one = $_GET['one'];
	$two = $_GET['two'];

	$object = new calculator;
	$object->add($one,$two);
	$object->sub($one,$two);
	$object->mul($one,$two);
	$object->div($one,$two);
	$object->mod($one,$two);
}
?>