<?php

//variabili per i valori inseriti nei campi input dall'utente
$paragraph = $_GET['paragraph'];
$bad_word  = $_GET['bad_word']; 

//funzione che calcola la lunghezza di una stringa
$paragraph_length = strlen($paragraph);

//stampo a schermo il paragrafo e la sua lunghezza
echo $paragraph."<br>".$paragraph_length; 


//Stamppo 

?>