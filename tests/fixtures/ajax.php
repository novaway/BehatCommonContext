<?php

sleep(5); // wait 5 seconds before processing data

$results = [
    'total_count' => 6,
    'items' => [
        [
            'id' => 0,
            'text' => 'France',
        ],
        [
            'id' => 1,
            'text' => 'Spain',
        ],
        [
            'id' => 2,
            'text' => 'England',
        ],
        [
            'id' => 3,
            'text' => 'Belgium',
        ],
        [
            'id' => 4,
            'text' => 'Germany',
        ],
        [
            'id' => 5,
            'text' => 'Canada',
        ],
    ],
];

header('Content-Type: application/json');
echo json_encode($results, JSON_PRETTY_PRINT);
