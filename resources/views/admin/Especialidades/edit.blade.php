<x-layouts.app>

<div class="card">
    <div class="card-header">Actualizar Especialidad</div>
    <div class="card-body">

        <form action="{{ url('especialidad/' .$Especialidad->id_especialidad) }}" class="was-validated" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id_especialidad" id="id_especialidad" value="{{$Especialidad->id_especialidad}}" />

          <label>Nombre Especialidad</label></br>
          <input type="text" required name="nombre_especialidad" id="nombre_especialidad" value="{{$Especialidad->nombre_especialidad}}" class="form-control">
          @error('nombre_especialidad')
          <li class="text-danger">{{$message}}</li>
          @enderror</br>
          <label>Dirrecion de la sede</label></br>
          <input type="text" required name="descripcion_especialidad" id="descripcion_especialidad" value="{{$Especialidad->descripcion_especialidad}}" class="form-control">
          @error('descripcion_especialidad')
          <li class="text-danger">{{$message}}</li>
          @enderror</br>



          <input type="submit" value="Actualizar la especialidad" class="btn btn-success"></br>
      </form>

    </div>
  </div>
</x-layouts.app>
