<?php 

$paragrafo = $_GET["paragrafo"];
$censura = $_GET["censura"];
$sostituisci = "***";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<h1>

<?php echo $intero_par = $paragrafo . " " . $censura . " ";

echo strlen($intero_par) . "<br>";

echo $new_paragrafo = str_replace($censura, $sostituisci, $intero_par);

echo strlen($new_paragrafo);


?>    
</h1>

</body>
</html>