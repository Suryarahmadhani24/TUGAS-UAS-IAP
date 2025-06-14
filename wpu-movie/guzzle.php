<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://www.omdbapi.com/', [
    'query' => [
        'apikey' => '7aae29b2',
        's' => 'transformers'
    ]
]);

$result = json_decode($response->getBody()->getContents(),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <?php foreach($result['Search'] as $movie):?>
    <ul>
        <li>Title : <?= $movie['Title']; ?></li>
        <li>Year : <?= $movie['Year']; ?></li>
        <li>
            <img src="<?= $movie['Poster']; ?>"width="80">

        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
