<?php

//variabili per i valori inseriti nei campi input dall'utente
$paragraph = $_GET['paragraph'];
$bad_word  = $_GET['bad_word']; 

//stampo a schermo il paragrafo e la sua lunghezza
echo  $paragraph ;
echo  strlen($paragraph);

?>