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
		<a href="?logout=true">Logout</a>
		<div class="row">
			<div class="col">
				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>name</th>
				      <th>price</th>
				      <th>amount</th>
				      <th>weight</th>
				      <th>descr</th>
				      <th>color</th>
				      <th>foto</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>

					<?php
						foreach ($prekes as $preke) {
							echo "<tr>
							<td>". $preke['id'] . "</td>
							<td>" . $preke['name'] . "</td>
							<td class = 'price'>" . $preke['price'] . "</td>
							<td>" . $preke['amount'] . "</td>
							<td>" . $preke['weight'] . "</td>
							<td>" . $preke['descr'] . "</td>
							<td>" . $preke['color'] . "</td>
							<td><img height='50px' src='../images/" . $preke['image'] . "'></td>
							<td><a class='btn btn-sm btn-danger' href='?delete=". $preke['id']. "'>Delete</a></td></tr>";
						}
					?>
					</tbody>
				</table>
			</div>			
			<div class="col">
				<h2>Pridėti produktą</h2>
				<form method ="POST" enctype="multipart/form-data">
					<div class="form-group">
    					<label>name</label>
						<input required class="form-control" type="text" name="name">
					</div>
					<div class="row">
						<div class="form-group col">
	    					<label>price</label>
						<input class="form-control" type="text" name="price">
						</div>
						<div class="form-group col">
	    					<label>amount</label>	
						<input class="form-control" type="text" name="amount">
						</div>
						<div class="form-group col">
	    					<label>weight</label>	
						<input class="form-control" type="text" name="weight">
						</div>
						<div class="form-group col">
	    					<label>color</label>	
						<input class="form-control" type="text" name="color">
						</div>
					</div>
					<div class="form-group col">
	    					<label>description</label>	
						<input class="form-control" type="text" name="descr">
					</div>
						<div class="form-group col">
	    					<label>Foto</label>	
						<input class="form-control" type="file" name="image">
						</div>
					</div>
					<button class="btn btn-primary" type="submit" name="submit">Įtraukti</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>
