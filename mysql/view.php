<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<table class="table">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Name</th>
			      <th>Price</th>
			      <th>Amount</th>
			    </tr>
			  </thead>
			  <tbody>
			
				<?php
					foreach ($prekės as $prekė) {
						echo "<tr><td>". $prekė['Id'] . "</td><td>" . $prekė['Name'] . "</td><td class = 'price'>" . $prekė['Price'] . "</td><td>" . $prekė['Amount'] . "</td></tr>";
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<script>
		$prices = $document.getElementsByClassName('price');
		//pabaigti!!!
        
	</script>
</body>
</html>
