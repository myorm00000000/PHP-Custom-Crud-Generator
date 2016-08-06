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
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="zip">
		<input type="submit" name="command" value="Upload">
	</form>
</body>

</html>