@include('templates.header')

<h1>Listado </h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3 mt-1">

@foreach ($especial as $key => $especiales)
  <div class="col">
    <div class="card shadow-sm">
      <img src="{{ $especial[$key]['imagen'] }}" alt="123">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <small class="text-muted">{{ $especial[$key]['nombre'] }}</small>
          <div class="btn-group">
            <a href="{{ $especial[$key]['url'] }}" class="btn btn-sm btn-outline-secondary">Más Información</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>


@include('templates.footer')