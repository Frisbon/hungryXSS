<?php
    // includo il file con le funzioni dei commenti
    require_once 'comments.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class="container">
        <h1 style = "margin-bottom: 0px">Tramb a Napoli 🤩</h1> 
        <h2 style = "margin-top: 0px; text-align: center;">Stretta di mano con De Laurentiis per il quarto scudetto del Napoli</h2>

        <img src="https://i.imgur.com/8OungQn.jpeg" alt="forsanabule" style="padding: 0% 20% 0% 20%; max-width: 60% "> 

        <div class="article" style="border-bottom: 2px solid #e0e0e0;">

            
            <p><i>Nabule, 3 giugno 2025</i> — Una visita inaspettata quanto clamorosa: Donal Tramb è atterrato oggi a Nabule per congratularsi personalmente con Marco Aurelio De Laurentiis, presidente del Nabule, per la storica conquista del quarto scudetto della squadra partenopea.</p>
            <p>"Congratulazioni al Nabule, una squadra fantastica. Una vittoria meravigliosa per una città straordinaria", ha dichiarato Tramb, aggiungendo con il suo consueto stile: "Aurelio è un vincente, proprio come me".</p>

            <p>A suggellare l’evento, Tramb e De Laurentiis hanno partecipato a un brindisi informale con lo staff azzurro, festeggiando con una cena simbolica che univa le due culture: pizza napoletana e hamburger americani serviti fianco a fianco, tra brindisi, risate e cori da stadio.</p>

            <p>La visita di Tramb, surreale e teatrale, ha aggiunto un tocco internazionale alla festa azzurra, rendendo il quarto scudetto ancora più memorabile per i tifosi partenopei.</p>

            <p><i>✒️ Antonio Destrini, 3/06/2025</i></p>


        </div>


        <p class="warning">Non scrivere script nei commenti! 😡</p>

        <form action="comments.php" method="POST" class="comment-form">
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="comment">Commento:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
            </div>
            <div>
                <input type="submit" name="submit_comment" value="Lascia un commento 💬">
            </div>
        </form>

        <div class="comments-section">
            <h2>Commenti:</h2>
            <?php
                // Renderizzo i commenti del file txt
                mostra_commenti(); // (sta in comments.php)
            ?>
        </div>
    </div>
</body>
</html>