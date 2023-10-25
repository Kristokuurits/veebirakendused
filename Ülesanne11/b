<?php
// Avage fail "andmefail.txt" lugemiseks ja kirjutamiseks "r+" režiimis fopen abil.
$file = fopen("andmefail.txt", "r+");

// Kasutage fgets, et lugeda esimene rida failist.
$firstLine = fgets($file);

// Lisage uus rida andmetega.
$newData = "Telefon: 555-1234\nAadress: 123 Main Street\n";

// Salvestage muudetud sisu tagasi faili, kasutades fwrite.
fwrite($file, $newData);

// Sulgege fail fclose abil.
fclose($file);

echo "Andmed on edukalt muudetud failis.";
?>
