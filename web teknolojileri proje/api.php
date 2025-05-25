
<?php
$url = "https://api.themoviedb.org/3/movie/popular?api_key=1aaa48f1fbe64ba493bef2933ec8e627&language=tr-TR&page=1";
$response = file_get_contents($url);
header('Content-Type: application/json');
echo $response;
?>