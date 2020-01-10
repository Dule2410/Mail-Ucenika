<?php
$imeOsobe = $_GET['imeOsobe'];
echo "Ime: " . $imeOsobe;
echo "<br>";
$prezimeOsobe = $_GET['prezimeOsobe'];
echo "Prezime: " . $prezimeOsobe;
echo "<br>";
$boja = $_GET['boja'];
echo "Najdraza boja: " . $boja;
echo "<br>";
$predmet = $_GET['predmet'];
echo "Najdrazi predmet: " . $predmet;
echo "<br>";
$regex = "/[A-Za-z0-9]+@[gmail|hotmail]+\.[com]+/";
$email = $_GET['email'];
if(preg_match($regex,$email)) {
    echo "email: " . $email;
}
else {
    echo "email: neispravno upisan!";
}