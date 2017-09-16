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
		<h1>Products Admin</h1>
		<div class="row">
			<div class="col">
				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Name</th>
				      <th>Price</th>
				      <th>Amount</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>

					<?php
						foreach ($prekes as $preke) {
							echo "<tr><td>". $preke['Id'] . "</td><td>" . $preke['Name'] . "</td><td class = 'price'>" . $preke['Price'] . "</td><td>" . $preke['Amount'] . "</td><td><a class='btn btn-sm btn-danger' href='?delete=". $preke['Id']. "'>Delete</a></td></tr>";
						}
					?>
					</tbody>
				</table>
			</div>			
			<div class="col">
				<h2>Pridėti produktą</h2>
				<form method ="POST">
					<div class="form-group">
    					<label>Name</label>
						<input class="form-control" type="text" name="Name">
					</div>
					<div class="row">
						<div class="form-group col">
	    					<label>Price</label>
						<input class="form-control" type="text" name="Price">
						</div>
						<div class="form-group col">
	    				<label>Amount</label>	
						<input class="form-control" type="text" name="Amount">
						</div>
					</div>
					<button class="btn btn-primary" type="submit" name="submit">Įtraukti</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>
