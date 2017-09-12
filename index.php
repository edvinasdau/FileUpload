<?php

$max_size = 1024;
$allowed_ext = array('jpg', 'png', 'gif');

if (isset($_FILES['image'])){
	if ($_FILES['image']['size'] < $max_size) {

		$file_name_array = explode(".",$_FILES['image']['name']);
		$file_extension = $file_name_array[1];

		if (in_array($file_extension, $allowed_ext)) {
			
			move_uploaded_file($_FILES['image'], ['tmp_name'])
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Uploads</title>
</head>
<body>
	<div class="container" id="heading">
		<div class="row">
			<div class="col left">
				<h1>File upload</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Upload form</h2>
					<form method="post" enctype="multipart/form-data">
					    Select image to upload:
					    <input type="file" name="image">
					    <input type="submit" value="Upload Image" name="submit">
					</form>
			</div>
			<div class="col">
				<h3>Debug</h3>
				<pre>
					<?php print_r($_FILES["image"]); ?>
				</pre>
			</div>
		</div>
	</div>
</body>
</html>