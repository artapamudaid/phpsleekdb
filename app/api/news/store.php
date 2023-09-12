<?php
include "../../models/news_model.php";

$article = [
    "title" => "Google Pixel XL",
    "about" => "Google announced a new Pixel!",
    "author" => [
        "avatar" => "profile-12.jpg",
        "name" => "Foo Bar"
    ]
];

$results = $newsModel->insert($article);
