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
        <p>Title: {{ $listOfData['title']}}</p>
        <p>Genre: {{ $listOfData['genre']}}</p>
        <p>Number of Seasons: {{ $listOfData['no. of seasons']}}</p>
        <p>Number of Episodes: {{ $listOfData['no. of episodes']}}</p>
    </div>

</body>
</html>