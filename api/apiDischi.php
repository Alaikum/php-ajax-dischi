<?php
include __DIR__ .'/../db/dischi.php';

$res = [
    'succes' => true,
    'response' => $dischi
];




// settiamo il content type 
header('Content-Type:application/json');


//stampiamo in formato JSON
echo json_encode($res);
?>