<?php

$discs_array = file_get_contents('dischi.json');
$discs = json_decode($discs_array, true);

header('Content-type: application/json');
echo json_encode($discs);
