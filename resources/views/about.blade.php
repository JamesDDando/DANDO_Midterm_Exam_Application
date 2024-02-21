<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <div class="anime">
        <h1>Anime</h1>
        <p>Title: {{ $listData['title']}}</p>
        <p>Genre: {{ $listData['genre']}}</p>
        <p>Number of Seasons: {{ $listData['seasons']}}</p>
        <p>Number of Episodes: {{ $listData['episodes']}}</p>
    </div>

</body>
</html>