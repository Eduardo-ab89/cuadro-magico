<?php
$numero = $_REQUEST['numeroc'];
$random = rand(100, 1500);
$residuo = $random % $numero;

echo $residuo;
?>