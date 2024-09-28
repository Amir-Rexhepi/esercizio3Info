<?php 
echo "<html>
<body>
<h1>ESERCIZIO 3</h1>";

include("function.php");
$n1 = 100;
$n2 = 200;
$somma =  somma($n1, $n2);
$stringa = "Scuola";
$lunghezzsStringa = lunghezzaStriga($stringa);
$array = [20,40,60,1000,20,33];
$sommaArray = arraySomma($array);
$parole = ["ciao","come va?"];
$maiscolo = maiuscolo($parole);
foreach($maiscolo as $parole);
echo "
<p>la somma e': $somma</p>
<p>la lunghezza di $stringa e': $lunghezzsStringa</p>
<p>la somma dell'array e': $sommaArray</p>
<p>Maiscolo:</p>";
foreach($maiscolo as $parole){
echo $parole . "<br>";
}
$stringa1 = "anna";
$stringa2 = "ciao";
$stringa3 = "A man a plan a canal Panama"; // Palindromo con spazi e maiuscole

// Stampa i risultati
echo palindromo($stringa1) ? "Vero: '$stringa1' è un palindromo.<br>" : "Falso: '$stringa1' non è un palindromo.<br>";
echo palindromo($stringa2) ? "Vero: '$stringa2' è un palindromo.<br>" : "Falso: '$stringa2' non è un palindromo.<br>";
echo "
</body>
</html>";

?>