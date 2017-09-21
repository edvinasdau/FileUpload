<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="head">
			<h1>eSHOP</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
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
			    </tr>
			  </thead>
			  <tbody>
			
				<?php
					foreach ($prekes as $preke) {
							echo "<tr><td>". $preke['id'] . "</td><td>" . $preke['name'] . "</td><td class = 'price'>" . $preke['price'] . "</td><td>" . $preke['amount'] . "</td><td>" . $preke['weight'] . "</td><td>" . $preke['descr'] . "</td><td>" . $preke['color'] . "</td></tr>";
						}
				?>
				
				</tbody>
			</table>
		</div>
		<div class="container">
			<div class="row">
				<?php
				foreach ($prekes as $preke) { 
					echo "<div class='rem'><div>".$preke['name']."</div>
							<div class='kaina'>" . $preke['price'] . "</div>
							<div class='apr'>" . $preke['descr'] . "</div>
							<img height='50px' src='images/" . $preke['image'] . "'>
					 	</div>";
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>

