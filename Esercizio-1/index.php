<?php
/* 
Stampare a schermo una decina di dischi musicali ( le cui informazioni sono reperibili qui https://flynn.boolean.careers/exercises/api/array/music ), generare tramite PHP una pagina HTML che mostra questi dati; opzionalmente potete associare uno stile che renda il layout piu leggibile
*/

include_once __DIR__ . '/../db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Disk</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="logo.png" alt="logo" />
        </div>
    </header>

        <div class="cds-container container">    
            <div class="row albums">    
                <?php
                foreach ($db['response'] as $k => $value){?>
                <div class="cd">
                    <img src=<?= '"' . $value['poster'] . '"'?> alt="Album logo">
                    <h3><?= $value['genre'] ?></h3>
                    <span class="author"><?= $value['author'] ?></span>
                    <span class="year"><?= $value['year'] ?></span>
                </div>
                <?php
                }
                ?>            
            </div>            
        </div>
            
            
        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
