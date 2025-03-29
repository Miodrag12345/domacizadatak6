<?php
  $imena = [
    'Toma', 'Petar', 'Marko'
];

$imePostoji = isset($_POST['ime']);
if($imePostoji == false)
{
    die("Niste uneli ime");
}

$duzinaImena =strlen($_POST['ime']);
if ($duzinaImena <3)
{
    die ("duzina imena imaju 3 karaktera");
}

$imeUListi = in_array($_POST['ime'], $imena);
if($imeUListi == false)
{
    die("Nismo pronasli ime u listi korisnika");
}

echo "Uspesno smo pronasli korisnika";


 
?>