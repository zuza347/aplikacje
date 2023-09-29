<?php
$myfile=fopen("webdictionary.txt", "r")or die("unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>