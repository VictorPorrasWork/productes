
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="table-responsive">
<table class="table">
        <thead class="table-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Descripcio</th>
            <th scope="col" colspan="2">Operacions</th>
            </tr>
        </thead>
    <tbody>
      @foreach($productes as $producte)
      <tr>
        <td>{{ $producte -> id }}
        </td>
        <td>
            {{ $producte -> nom_categoria }}
        </td>
        <td>
            {{ $producte -> descripcio_categoria }}
        </td>    
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-primary btn-sm" href="{{ route('productes.create') }}">Nou Producte</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>

