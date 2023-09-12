<?php

use SleekDB\SleekDB;

function sleek(string $name, string $database, array $config = [])
{
    $defaultConfig = [
        'auto_cache' => true,
        'timeout' => false,
    ];

    $config = array_merge($defaultConfig, $config);

    return SleekDB::store($name, $database, $config);
}
