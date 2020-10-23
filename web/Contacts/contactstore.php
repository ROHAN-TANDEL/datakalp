<?php


$data = json_encode($_REQUEST);
$data = $data.",\n";
$myfile = fopen("contactfile.txt", "a") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);