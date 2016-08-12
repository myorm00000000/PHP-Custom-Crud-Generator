<?php
	include('includes/config.php');
	include('includes/class.upload.php');
	$val=$obj_upload->initilize_error('file-size');
	echo $val;die();
	if (isset($_POST['command']) && $_POST['command']=='Upload') {
		$obj_upload->upload_file('zip');	//pass name of input type file
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Zip File Image Uploader</title>
</head>

<body>
	<div class="nav navbar-nav">
		<ul class="inline-block">
			<li><a href="#">Home</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Tutorials</a></li>
			<li><a href="#">Torrents</a></li>
			<li><a href="#">Sessions</a></li>
			<li><a href="#">Movies</a></li>
		</ul>
	</div>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="zip">
		<input type="submit" name="command" value="Upload">
	</form>
	<div class="text-center">
		<div class="file_open">
			To Open a File!
		</div>
	</div>
</body>
</html>