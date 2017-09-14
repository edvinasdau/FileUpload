<?php

if (isset($_FILES['image'])){
		$file = $_FILES['image'];

		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];

		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));

		$allowed = array('jpg', 'gif');

		if(in_array($file_ext, $allowed)){
			if($file_error === 0){
				if($file_size <= 1048576){

					$file_name_new = uniqid('', true) . '.' . $file_ext;
					$file_destination = 'uploads/' . $file_name_new;

					if(move_uploaded_file($file_tmp, $file_destination)){
						echo $file_destination;
					}

				}
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