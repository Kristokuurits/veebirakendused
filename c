<?php
// Kontrollige, kas faili "andmefail.txt" suurus on suurem kui 200 baiti, kasutades filesize.
$fileSize = filesize("andmefail.txt");

if ($fileSize > 200) {
    // Kustutage fail unlink abil.
    unlink("andmefail.txt");
    echo "Fail on kustutatud, sest see on suurem kui 200 baiti.";
} else {
    echo "Fail ei vasta kustutamise kriteeriumile, kuna see ei ole suurem kui 200 baiti.";
}
?>
