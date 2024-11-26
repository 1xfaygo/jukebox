<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    @yield('head')
</head>
<body>
    <nav>
        <li><button><a href="/artists">Artist</a></button></li>
        <li><button><a href="/albums">Albums</a></button></li>
        <li><button><a href="/songs">Songs</a></button></li>
        <li><button><a href="/playlist">Playlists</a></button></li>
        <li><button><a href="/genre">Genres</a></button></li>
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