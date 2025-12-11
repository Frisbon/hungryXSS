<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Saluto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Recupera 'nome' dall'URL
        $nome_utente = isset($_GET['nome']) ? $_GET['nome'] : 'sconosciuto';
        ?>
        <h1>Ciao <?php echo $nome_utente; ?>!</h1>
        <p>Ti volevo solo salutare 😄</p>
    </div>
</body>
</html>



