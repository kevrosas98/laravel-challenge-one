@include('templates.header')

<h1>Contactanos</h1>

@if($nombres != null)
    <p class="fs-3 text-center">{{ $saludo }}</p>

    <p class="fs-3 text-center">
        Nombres:    <br>   <strong>{{ $nombres }}</strong> <br>
        Telefono:   <br>   <strong>{{ $telefono }}</strong> <br>
        Correo:     <br>   <strong>{{ $correo }}</strong> <br>
        Mensaje:    <br>   <strong>{{ $mensaje }}</strong> <br>
    </p>

@else
    <form action="/contacto/procesar" method="post">

    @csrf

    <div class="mb-3">
        <label for="nombres" class="form-label">Nombres: </label>
        <input type="text" class="form-control" name="nombres" id="nombres">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono / Celular: </label>
        <input type="number" class="form-control" name="telefono" id="telefono">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo: </label>
        <input type="email" class="form-control" name="email" id="email">
    </div>

    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" rows="3" name="mensaje" id="mensaje"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar datos</button>

    </form>
@endif

@include('templates.footer')
