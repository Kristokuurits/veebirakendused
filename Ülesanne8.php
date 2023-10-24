<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 8</title>
</head>

<body>
    <h1>Ülesanne 8</h1>
    <?php

    $kuupaev_kellaaeg = date("d.m.Y H:i");
    echo "<p>Kuupäev ja kellaaeg: $kuupaev_kellaaeg</p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $synniaasta = intval($_POST["synniaasta"]);
        $praegune_aasta = date("Y");
        $vanus = $praegune_aasta - $synniaasta;
        echo "<p>Sina oled $vanus aastat vana.</p>";

        $jargmine_aasta = $praegune_aasta + 1;
        $vanus_jargmisel_aastal = $jargmine_aasta - $synniaasta;
        echo "<p>Järgmisel aastal saad $vanus_jargmisel_aastal aastat vanaks.</p>";
    } else {
        echo '
        <h2>Kui vana oled?</h2>
        <form method="post">
            <label for="synniaasta">Sünniaasta:</label>
            <input type="number" name="synniaasta" id="synniaasta">
            <input type="submit" value="Leia vanus">
        </form>';
    }

    $kooliaasta_lopp = date("Y") . "/" . (date("Y") + 1);
    $kooliaasta_lopu_kuupaev = date("Y-m-d", strtotime($kooliaasta_lopp . "-06-30"));
    $paevi_kooliaasta_lopuni = ceil((strtotime($kooliaasta_lopu_kuupaev) - time()) / (60 * 60 * 24));
    echo "<p>$kooliaasta_lopp kooliaasta lõpuni on jäänud $paevi_kooliaasta_lopuni päeva!</p>";

    $kuu = date("n");
    if ($kuu >= 3 && $kuu <= 5) {
        echo '<img src="https://www.google.com/search?client=firefox-b-d&sca_esv=576067890&sxsrf=AM9HkKlNem1RqLDLSEWdUWyE_oaqcdz9hA:1698142344739&q=kevad&tbm=isch&source=lnms&sa=X&ved=2ahUKEwigwvGZuY6CAxWJ_KQKHfmwA8EQ0pQJegQIDRAB&biw=2560&bih=1325&dpr=1#imgrc=m3rsEcJ9Pc-J2M" alt="Kevad">';
    } elseif ($kuu >= 6 && $kuu <= 8) {
        echo '<img src="https://www.google.com/search?client=firefox-b-d&sca_esv=576067890&sxsrf=AM9HkKlkHyxqVeWfGER6MVkCr2sYHM1yyw:1698142328111&q=suvi&tbm=isch&source=lnms&sa=X&ved=2ahUKEwjy1PqRuY6CAxUrPewKHUq2C50Q0pQJegQIDRAB&biw=2560&bih=1325&dpr=1#imgrc=FNs_2ZbOtiMK7M" alt="Suvi">';
    } elseif ($kuu >= 9 && $kuu <= 11) {
        echo '<img src="https://www.google.com/search?client=firefox-b-d&sca_esv=576067890&sxsrf=AM9HkKn0cbEm0xx1SpDHC3whZ5c1ZtzLDQ:1698141640827&q=sugis.jpg&tbm=isch&source=lnms&sa=X&ved=2ahUKEwjJkp7Kto6CAxXJKewKHQ0LD2AQ0pQJegQIDBAB&biw=2560&bih=1325&dpr=1#imgrc=_6vhuFXY6V-jlM" alt="Sügis">';
    } else {
        echo '<img src="https://www.google.com/search?client=firefox-b-d&sca_esv=576067890&sxsrf=AM9HkKlkB3scg5hF3GENNrboO94eYDUlhg:1698142308701&q=talv&tbm=isch&source=lnms&sa=X&ved=2ahUKEwiQ-NmIuY6CAxWw3gIHHZ2IAXQQ0pQJegQIDBAB&biw=2560&bih=1325&dpr=1#imgrc=IC8oJovIupI4UM" alt="Talv">';
    }
    ?>
</body>

</html>