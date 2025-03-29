<?php
$proveriPIN = isset($_POST["pin"]);
if($proveriPIN ==false)
{
    die("Niste uneli pin");
}

$duzinaPina = strlen($_POST["pin"]);
if ($duzinaPina <4  || $duzinaPina>6)
{
   die("Pin mora imati 4 karaktera ili manje od 6 karaktera");
}

echo "uspesno ste uneli PIN";


?>