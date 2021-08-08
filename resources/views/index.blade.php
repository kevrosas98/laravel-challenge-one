@include('templates.header')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
      <div class="carousel-inner">
        @foreach ($pbanners as $key => $pbanner)
        <div class="carousel-item {{ $pbanners[$key]['status'] }}">
          <img src="{{ $pbanners[$key]['imagen'] }}" class="d-block w-100" alt="{{ $pbanners[$key]['nombre'] }}">
        </div>
        @endforeach

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3 mt-1">

    @foreach ($pespecialidades as $key => $especialidad)
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ $pespecialidades[$key]['imagen'] }}" alt="{{ $pespecialidades[$key]['nombre'] }}">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">{{ $pespecialidades[$key]['nombre'] }}</small>
              <div class="btn-group">
                <a href="{{ $pespecialidades[$key]['url'] }}" class="btn btn-sm btn-outline-secondary">Ver Cursos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>

@include('templates.footer')