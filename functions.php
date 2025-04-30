<?php

$file_dischi = file_get_contents("./dischi.json");
var_dump($file_dischi);

$dischi = json_decode($file_dischi);

var_dump($dischi);
