<?php 
/* 
Stampare a schermo una decina di dischi musicali ( le cui informazioni sono reperibili qui https://flynn.boolean.careers/exercises/api/array/music ), generare tramite PHP una risposta in formato JSON che contiene questi dati; come test di funzionamento, deve risultare che intercambiando l'endpoint citato sopra con il vostro endpoint locale, la web app che avete pushato nel repo vue-dischi funzioni allo stesso modo nei due casi
*/

include_once __DIR__ . '/../db.php';

$input_filter = $_GET['input_filter'];

header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');

if($input_filter == null){
    echo json_encode($db);
} else {
    $filtered_db = $db;
    $filtered_db['response'] = [];
    foreach($db['response'] as $key => $value){
       if((strpos(strtolower($value['author']), strtolower($input_filter)) !== false) || (strpos(strtolower($value['title']), strtolower($input_filter)) !== false)){
           $filtered_db['response'][] = $value;
       }
    }
    echo json_encode($filtered_db);
};





?>