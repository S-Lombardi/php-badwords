<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Bad Words</title>
</head>
<body>
    <form action="script.php" method="GET">
        <!-- INPUT PER IL PARAGRAFO -->
        <h2>Inserire un testo</h2>
        <textarea name="paragraph"  cols="30" rows="10"></textarea>
        <!-- INPUT PER PAROLA DA CENSURARE -->
        <h3>Scrivere una parola del testo da censurare</h2>
        <input type="text" name="bad_word" placeholder>
        <input type="submit" value="Invia">

    </form>
</body>
</html>