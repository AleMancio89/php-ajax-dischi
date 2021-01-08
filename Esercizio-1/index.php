<?php
/* 
Stampare a schermo una decina di dischi musicali ( le cui informazioni sono reperibili qui https://flynn.boolean.careers/exercises/api/array/music ), generare tramite PHP una pagina HTML che mostra questi dati; opzionalmente potete associare uno stile che renda il layout piu leggibile
*/

$db = [
    'success' => true,
    'response' => [
        [
            'poster'=> 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
            'title'=> 'New Jersey',
            'author'=> 'Bon Jovi',
            'genre'=> 'Rock',
            'year'=> '1988'
        ],
        [
            'poster'=> 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
            'title'=> 'Live at Wembley 86',
            'author'=> 'Queen',
            'genre'=> 'Pop',
            'year'=> '1992'
        ],
        [
            'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
            'title'=> "Ten's Summoner's Tales",
            'author'=> 'Sting',
            'genre'=> 'Pop',
            'year'=> '1993'
        ],
        [
            'poster'=> 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
            'title'=> 'Steve Gadd Band',
            'author'=> 'Steve Gadd Band',
            'genre'=> 'Jazz',
            'year'=> '2018'
        ],
        [
            'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
            'title'=> 'Brave new World',
            'author'=> 'Iron Maiden',
            'genre'=> 'Metal',
            'year'=> '2000'
        ],
        [
            'poster'=> 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
            'title'=> 'One more car, one more raider',
            'author'=> 'Eric Clapton',
            'genre'=> 'Rock',
            'year'=> '2002'
        ],
        [
            'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
            'title'=> 'Made in Japan',
            'author'=> 'Deep Purple',
            'genre'=> 'Rock',
            'year'=> '1972'
        ],
        [
            'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'title'=> 'And Justice for All',
            'author'=> 'Metallica',
            'genre'=> 'Metal',
            'year'=> '1988'
        ],
        [
            'poster'=> 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
            'title'=> 'Hard Wired',
            'author'=> 'Dave Weckl',
            'genre'=> 'Jazz',
            'year'=> '1994'
        ],
        [
            'poster'=> 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
            'title'=> 'Bad',
            'author'=> 'Michael Jackson',
            'genre'=> 'Pop',
            'year'=> '1987'
        ]
    ]
];

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
