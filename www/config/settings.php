<?php

declare(strict_types=1);

error_reporting(E_ALL);

ini_set('display_errors', 1);

$settings = [
    'plates' => [
        'path' => dirname(__DIR__) . '/views',
    ]
];

return $settings;