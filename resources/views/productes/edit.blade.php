<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Producte</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1>Editar Producte</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productes.update', $producte->id) }}" method="POST">
        @csrf
        <label for="nom_categoria">Nom de la categoria:</label><br>
        <input type="text" id="nom_categoria" name="nom_categoria" value="{{ $producte->nom_categoria }}"><br>

        <label for="descripcio_categoria">Descripció de la categoria:</label><br>
        <textarea id="descripcio_categoria" name="descripcio_categoria">{{ $producte->descripcio_categoria }}</textarea><br>

        <label for="quantitat">Quantitat:</label><br>
        <input type="number" id="quantitat" name="quantitat" value="{{ $producte->quantitat }}"><br>

        <button type="submit">Guardar Canvis</button>

        <a href="{{ route('productes.index') }}" class="btn btn-primary">Veure Productes</a>

    </form>
</body>
</html>
