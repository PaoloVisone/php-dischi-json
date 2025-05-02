<?php

$file_dischi = file_get_contents("./dischi.json");

$dischi = json_decode($file_dischi);
