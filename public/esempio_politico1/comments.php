<?php

$file_commenti='comments.txt';

/* serve per aggiungere comm in file */
function aggiungi_commento($nome,$messaggio){
    global $file_commenti;

    /*
        Attraverso htmlspecialchars() sanificihiamo input
        Tale funzione è capace di convertire i caratteri speciali (<,>,",') in entità HTML
        Così sono mostrati semplicemente come testo normale e non eseguiti o interpretati
    */
   
    $nome_controllato=htmlspecialchars($nome,ENT_QUOTES,'UTF-8');

    /*  
        Il nome e il messaggio vengonon concatenati direttamente.
        NB: Non stiamo sanificando il messaggio 
    */

    $record="<div class='comment-item'><strong>".$nome_controllato." ha scritto:</strong><p>".$messaggio."</p></div>\n";

    // appende record al file txt e usa lock per accesso esclusivo
    if(file_put_contents($file_commenti, $record,FILE_APPEND|LOCK_EX)===false) {
        // se si rompe qualcosa mostra errore
        error_log("non funge :(".$file_commenti);
    }
}

/* Renderizza i commenti del file txt*/
function mostra_commenti(){
    global $file_commenti;

    if(file_exists($file_commenti)&&filesize($file_commenti)>0){
       
        // prende il content del file e lo stampa direttamente sulla pagina
        readfile($file_commenti);

    }else{
        echo"<p class='no-comments'>No messaggi capo 🐒</p>";
    }
}

// gestione invio dal form in index a questo file
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit_comment'])){
   
    $messaggio_commento=trim($_POST['comment']??''); // Prende il commento dal form

    $name=trim($_POST['name']??'Geronimo l`Anonimo'); // se non metto nome, metto uno di default

    if (!empty($name) && !empty($messaggio_commento)) { 
        aggiungi_commento($name, $messaggio_commento); 
    }

    
    /* serve per vedere i commenti aggiornati ed evitare 
    il reinvio del form se si ricarica la pagina */
    header("Location: index.php");
    exit; 

}

?>