<?php

// include ImgCompressor.php
include_once('lib/ImgCompressor.class.php');

// setting
$setting = array(
	'directory' => 'compressed', // directory file compressed output
	'file_type' => array( // file format allowed
		'image/jpeg',
		'image/png',
		'image/gif'
	)
);

// create object
$ImgCompressor = new ImgCompressor($setting);

// run('STRING original file path', 'output file type', INTEGER Compression level: from 0 (no compression) to 9);
$result1 = $ImgCompressor->run('original/telecom_surat.jpg', 'gif', 9);
$result2 = $ImgCompressor->run('original/DSC_7105.jpg', 'png', 8); // example level = 2 same quality 80%, level = 7 same quality 30% etc

// result array
echo '<pre>';
print_r($result1);
print_r($result2);
echo '</pre>';
