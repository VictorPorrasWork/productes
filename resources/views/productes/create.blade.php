<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Producte</title>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <select name="nom_categoria" id="nom_categoria">
            @foreach(['fruïta', 'carn', 'peix', 'fruïts secs', 'cereal', 'verdura'] as $nom_categoria)
                <option value="{{ $nom_categoria }}">{{ $nom_categoria }}</option>
            @endforeach
        </select>    
        <br>

        <label for="descripcio_categoria">Descripció de la categoria:</label><br>
        <textarea id="descripcio_categoria" name="descripcio_categoria">{{ old('descripcio_categoria') }}</textarea><br>

        <label for="categoria_filla">Categoria Filla:</label><br>
        <select name="categoria_filla" id="categoria_filla">
            <optgroup label="Fruïta">
                <option value="pomes">Pomes</option>
                <option value="maduixes">Maduixes</option>
                <option value="platans">Platans</option>
                <option value="cireres">Cireres</option>
            </optgroup>
            <optgroup label="Carn">
                <option value="porc">Porc</option>
                <option value="pollastre">Pollastre</option>
                <option value="gall_dindi">Gall Dindi</option>
                <option value="xai">Xai</option>
            </optgroup>
            <optgroup label="Peix">
                <option value="sardina">Sardina</option>
                <option value="llobarro">Llobarro</option>
                <option value="bacalla">Bacallà</option>
                <option value="tonyina">Tonyina</option>
            </optgroup>
            <optgroup label="Fruïts Secs">
                <option value="ametlles">Ametlles</option>
                <option value="nous">Nous</option>
                <option value="festucs">Festucs</option>
                <option value="castanyes">Castanyes</option>
            </optgroup>
            <optgroup label="Cereals">
                <option value="integral">Integral</option>
                <option value="quinoa">Quinoa</option>
                <option value="avena">Avena</option>
                <option value="cebada">Cebada</option>
            </optgroup>
            <optgroup label="Verdures">
                <option value="faves">Faves</option>
                <option value="brocoli">Brocoli</option>
                <option value="espinacs">Espinacs</option>
                <option value="pesols">Pèsols</option>
            </optgroup>
        </select><br>

        <label for="quantitat">Quantitat:</label><br>
        <input type="number" id="quantitat" name="quantitat" value="{{ old('quantitat') }}"><br>

        <button type="submit">Crear Producte</button>
        
        <a href="{{ route('productes.index') }}" class="btn btn-primary">Veure Productes</a>
    </form>
</body>
</html>
