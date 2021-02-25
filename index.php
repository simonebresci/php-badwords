<?php


echo "http://localhost/?badword=StringaFraDoppiApici <br> <br>";

//Prendi parametro dal $_GET
echo "<b>GET CONTIENE: </b> <br> <br>";
var_dump($_GET);
echo "<br> <br>";

$paragrafo = "Lorem ipsum dolor sit amete, consectetur adipisicing elit,<br>
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br>
aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in <br>
voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint <br>
occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <br>
anim id est laborum.";
echo "<b> TESTO ORIGINALE </b> <br> <br>";
echo $paragrafo;
echo '<br> <br>';

echo '<b> Lunghezza paragrafo: </b>' . strlen($paragrafo);
echo '<br> <br>';

echo '<b> TESTO MODIFICATO </b> <br> <br>';
echo "Parola da sostituire: " . $_GET['badword'];
echo '<br> <br>';
$paragrafo = str_replace( $_GET['badword'] ,"***", $paragrafo);
echo $paragrafo;
?>
