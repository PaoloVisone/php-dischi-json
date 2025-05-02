<?php

// Recupero il file json
$file_json = file_get_contents('./dischi.json');
// echo $file_json;

// Decodifico il JSON in un array PHP
$dischi = json_decode($file_json, true);

// Ricavo i dati del form tramite POST
$titolo = $_POST['titolo'] ?? '';
$artista = $_POST['artista'] ?? '';
$url = $_POST['url'] ?? '';
$anno = $_POST['anno'] ?? '';
$genere = $_POST['genere'] ?? '';

// Aggiungo il nuovo disco all'array
$nuovoDisco = [
    "titolo" => $titolo,
    "artista" => $artista,
    "url della cover" => $url,
    "anno di pubblicazione" => $anno,
    "genere" => $genere
];

$dischi[] = $nuovoDisco;

// Codifico l'array aggiornato in JSON
$file_json_aggiornato = json_encode($dischi);
// var_dump($file_json_aggiornato);

// Scrivo i dati aggiornati nel file JSON
file_put_contents("./dischi.json", $file_json_aggiornato);

// Reindirizzo l'utente alla pagina principale
header('Location: index.php');
