<?php
$jsonString = file_get_contents("php://input");
fwrite(STDOUT, $jsonString);
