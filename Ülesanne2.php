<?php

$arv1 = 10;
$arv2 = 5;

$summa = $arv1 + $arv2;
$vahe = $arv1 - $arv2;
$korrutis = $arv1 * $arv2;
$jagatis = $arv1 / $arv2;

$jaak = $arv1 % $arv2;

echo "Ülesanne 1 - Täisarvude tehted:\n";
echo "Liitmine: $arv1 + $arv2 = $summa\n";
echo "Lahutamine: $arv1 - $arv2 = $vahe\n";
echo "Korrutamine: $arv1 * $arv2 = $korrutis\n";
echo "Jagamine: $arv1 / $arv2 = $jagatis\n";
echo "Jääk: $arv1 % $arv2 = $jaak\n\n";


$millimeetrid = 2500;
$sentimeetrid = $millimeetrid / 10;
$meetrid = $sentimeetrid / 100;

echo "Ülesanne 2 - Millimeetrid sentimeetriteks ja meetriteks:\n";
echo "$millimeetrid mm = $sentimeetrid cm\n";
echo "$millimeetrid mm = $meetrid m\n\n";


$a = 4; 
$b = 3; 

$hupotenuus = sqrt($a * $a + $b * $b);
$umbermoot = $a + $b + $hupotenuus;
$pindala = ($a * $b) / 2;

echo "Ülesanne 3 - Täisnurkse kolmnurga ümbermõõt ja pindala:\n";
echo "Ümbermõõt: $umbermoot (täisarv)\n";
echo "Pindala: $pindala (täisarv)\n";
?>
