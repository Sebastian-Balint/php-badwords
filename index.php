<?php
$michele = 'michele';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="badword.php" method="GET">
        <textarea name="paragraph" id="" required cols="30" rows="10"></textarea>
        <input name="censured" type="text">
        <button type="submit">Invia</button>
    </form>
</body>
</html>