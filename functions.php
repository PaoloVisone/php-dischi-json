<?php

function getData()
{
    // Recupero il file json
    $file_dischi = file_get_contents("./dischi.json");

    // Decodifico il JSON in un array PHP
    return  json_decode($file_dischi, true);
}
