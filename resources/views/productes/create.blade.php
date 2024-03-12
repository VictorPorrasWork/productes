<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producte</title>
</head>
<body>
    <h1>Crear Producte</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productes.store') }}" method="POST">
        @csrf
        <label for="nom_categoria">Nom de la categoria:</label><br>
        <input type="text" id="nom_categoria" name="nom_categoria" value="{{ old('nom_categoria') }}"><br>

        <label for="descripcio_categoria">Descripció de la categoria:</label><br>
        <textarea id="descripcio_categoria" name="descripcio_categoria">{{ old('descripcio_categoria') }}</textarea><br>

        <button type="submit">Crear Producte</button>
    </form>
</body>
</html>
