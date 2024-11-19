<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <nav>
        <li><a href="/artists">Artist</a></li>
        <li><a href="/albums">Albums</a></li>
        <li><a href="/songs">Songs</a></li>
        <li><a href="/playlist">Playlists</a></li>
        <li><a href="/genres">Genres</a></li>
    </nav>

@yield('body')

@yield('goback')


<footer> 
    
    <p>
        &copy; Yassine -{{ date('Y') }} 
    </p>

</footer>
</body>
</html>