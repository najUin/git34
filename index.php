<?php

echo file_get_contents("texte.log");

$file = fopen("texte.log", "w+");
fwrite($file, date("Y-m-d H:i:s")." : le script a été ouvert\r\n");
fclose($file);



?>