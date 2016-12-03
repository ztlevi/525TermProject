<?php
$dir = 'upload_image';
$files = scandir($dir);
// print_r($files);
$data['result'] = $files;
echo json_encode($data);
?>
