<?php
$paragraph = $_GET['paragraph'];
$paragraphToLower = strtolower($paragraph);
$censured = $_GET['censured'];
$censuredTolower = strtolower($censured);
$paragraphCensured = str_replace($censuredTolower, '***', $paragraphToLower);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <p><?php echo $paragraph;?></p>
    <div>lunghezza paragrafo <?php echo strlen($paragraph);?></div>
    <div>paragrafo censurato</div>
    <p><?php echo $paragraphCensured; ?></p>

</body>
</html>