<?php





$imeProsledjeno= isset($_POST["ime"]) && trim($_POST["ime"]) !== "" ;
$lozinkaProsledjena =isset($_POST["lozinka"]) && trim($_POST["lozinka"]) !== "" ;;
if ($imeProsledjeno ==false) {
    die("ime nije prosledjeno ") ;

}
if ($lozinkaProsledjena ==false) {
    die("lozinka nije prosledjena ") ;

}
 echo $_POST["ime"] ." ". $_POST["lozinka"] ;
 ?>


<?php




$imeProsledjeno= isset($_POST["ime"]) ;
$lozinkaProsledjena =isset($_POST["lozinka"]);
if ($imeProsledjeno ==false) {
    die("ime nije prosledjeno ") ;

}
if ($lozinkaProsledjena ==false) {
    die("lozinka nije prosledjena ") ;

}
$ime=trim($_POST["ime"]);
if($ime== "")
{
    die( "morate uneti ime ");
}

$lozinka=trim($_POST["lozinka"]);
if($lozinka== "")
{
    die  ("morate uneti lozinku ");
}
 echo $_POST["ime"] ." ". $_POST["lozinka"] ;
 ?>
