<?php
echo "Het albumoverzicht.".PHP_EOL;

$albumoverzicht = array (
   "Citizen of Glass" => 4.5,
   "Night" => 9,
   "New Eyes" => 5,
   "Strange Trails" => 10
);

$totaal = 0;

foreach($albumoverzicht as $album => $prijs){
    echo "$album kost $prijs".PHP_EOL;
    $totaal = $totaal + $prijs;
    $aantal = $aantal + 1;
}

$gemiddelde = $totaal / $aantal;

echo "Het totaal bedrag van alle albums is €$totaal,-".PHP_EOL;
echo "De gemmidelde prijs van alle albums is €$gemiddelde".PHP_EOL;
