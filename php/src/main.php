<?php 
require_ONCE __DIR__ . "/Calculatrice.php";
echo "Bonjour le monde!";
$calc = new Calculatrice();
$res = $calc-> additionner(1,1);
echo "$res";
?>  
