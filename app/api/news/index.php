<?php
include "../../models/news_model.php";

$news = $newsModel->findAll();

echo json_encode($news);
