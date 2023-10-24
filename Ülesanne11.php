<?php
$file = fopen("andmefail.txt", "w");

$data = array(
    'Nimi' => 'John Doe',
    'Email' => 'johndoe@tthk.ee',
    'Vanus' => 30,
    'Hobi' => 'Jalgrattasõit'
);

foreach ($data as $key => $value) {
    fwrite($file, "$key: $value\n");
}

fclose($file);
?>
