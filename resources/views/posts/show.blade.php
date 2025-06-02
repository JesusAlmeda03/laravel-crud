<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Listado de posts</title>
</head>
<body>
    @if ($post)
        {{ $post }}
    @else
        <h1>No se encontró el post</h1>
    @endif
</body>
</html>
