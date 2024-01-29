<?php

include 'film-class.php';
include 'film-header.php';

// Read JSON file
$jsonData = file_get_contents(__DIR__ . '/films.json');

// Decode JSON data into an associative array
$dataArray = json_decode($jsonData, true);

// Initialize an array to store Film objects
$films = [];

// Iterate over each element and create Film objects
foreach ($dataArray as $item) {
    $film = new Film($item['title'], $item['stars'], $item['genre'], $item['tags']);
    $films[] = $film;
    include 'film-item.php';
}

include 'film-footer.php';