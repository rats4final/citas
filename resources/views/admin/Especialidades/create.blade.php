<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de especialidades</div>
        <div class="card-body">

            <form action="{{ url('especialidad') }}" class="was-validated" method="post">
              {!! csrf_field() !!}
              <label>Nombre de la especialidad</label></br>
              <input type="text" name="nombre_especialidad" id="nombre_especialidad" class="form-control" required>
              @error('nombre_especialidad')
            <li class="text-danger">{{$message}}</li>
            @enderror

            </br>
              <label>Descripcion de la especialidad</label></br>
              <input type="text" name="descripcion_especialidad" id="descripcion_especialidad" class="form-control" required>
              @error('descripcion_especialidad')
            <li class="text-danger">{{$message}}</li>
            @enderror

            </br>


              <input type="submit" value="Registrar la especialidad" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
