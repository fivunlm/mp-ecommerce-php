<?php
$jsonString = file_get_contents("php://input");
$out = fopen('php://output', 'w');
fputs($out, $jsonString); //writing output operation
fclose($out);
