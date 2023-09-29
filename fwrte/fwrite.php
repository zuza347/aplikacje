<?php 
$myfile=fopen("newfile.txt","w")ro die ("unable to open file");
$txt="john doe\n";
fwrite($myfile, $txt);
fclose($myfile);