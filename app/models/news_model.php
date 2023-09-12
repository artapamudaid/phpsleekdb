<?php
require(__DIR__ . '/../config/database.php');
require(__DIR__ . '/../helpers/sleek_helper.php');


$table = "news";

$newsModel = sleek($table, $databaseDirectory, $config = array());
