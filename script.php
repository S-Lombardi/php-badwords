<?php

//variabili per i valori inseriti nei campi input
$paragraph = $_GET['paragraph'];
$bad_word  = $_GET['bad_word'];

//funzione che calcola la lunghezza di una stringa
$paragraph_length = strlen($paragraph);

//stampo a schermo il paragrafo e la sua lunghezza
echo $paragraph." || lunghezza testo: ".$paragraph_length."<br><br><br>"; 

/*Funzione che sostituisce caratteri con altri in una stringa
 (da sostituire, il sostituto, la stringa)
*/
$censored_paragraph = str_replace($bad_word, "***" ,$paragraph );

//Ricalcolo la lunghezza della stringa censurata
$censored_paragraph_length = strlen($censored_paragraph);

//Stampo a schermo il paragrafo censurato e la sua lunghezza
echo $censored_paragraph. " || lunghezza testo: " .$censored_paragraph_length;
?>