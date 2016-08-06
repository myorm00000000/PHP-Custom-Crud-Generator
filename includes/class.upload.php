<?php
	class UploadZipFileImage {
		private $tmp_dir, $dir;

		function __construct() {

		}

		function upload_file($name) {

		}

		function initilize_error($type) {
			switch ($type) {
				case 'file-size':
					return 'File size in bytes must be less than or equal to: '.ini_get('post_max_size');
					break;
				
				default:
					return 'nothing';
					break;
			}
		}

		function return_bytes($val) {
		    $val = trim($val);
		    $last = strtolower($val[strlen($val)-1]);
		    switch($last) {
		        // The 'G' modifier is available since PHP 5.1.0
		        case 'g':
		            $val *= 1024;
		        case 'm':
		            $val *= 1024;
		        case 'k':
		            $val *= 1024;
		    }

		    return $val;
		}
	}
	$obj_upload=new UploadZipFileImage();
?>