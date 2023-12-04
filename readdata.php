<?php
$my_file = 'newfile.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));
echo $data;
fclose($handle);
?>
