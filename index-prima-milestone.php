<?php 

/*

Esercizio di oggi:
cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. => index-prima-milestone.php

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
<nav class="nav">
            <div>
                <select name="music" id="genre">
                    <option value="all">All</option>
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="jazz">Jazz</option>
                    <option value="metal">Metal</option>
                </select>
            </div>


</nav>
<?php 

$liceoType = 'pop';

$result = array_filter($database, function($item) use ($liceoType) {
    // ritorna true solo se vogliamo che l'item passi all'array finale ($result)
    return $item["genre"] === $liceoType;
});

echo $result;

require_once __DIR__ . "/database/database.php";
$album="<div class='container'>";
foreach($database as $item =>$disco) {
    $album .= "<div class='album'><img class='poster' src='{$disco['poster']}'>";
    $album .= "<h2 class='title'>{$disco['title']}</h2>";
    $album .= "<div class='sub-title'><div>{$disco['author']}</div>";
    $album .= "<div>{$disco['year']},{$disco['genre']}</div></div></div>";
    // disc['title']
}
$album .= "</div>";
echo $album;


?>
    
</body>
</html>