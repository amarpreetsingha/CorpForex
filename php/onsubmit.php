<?php
$my_file = 'details.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
$data = $_POST["limit"];
$data = $data . $_POST["date"];
fwrite($handle, $data);
fclose($handle);
header("Location: http://localhost/Template4");
exit;
?>