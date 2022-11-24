<x-layouts.app>

<div class="card">
    <div class="card-header">Editar Sede</div>
    <div class="card-body">

        <form action="{{ url('Historial/' .$Historia->id_historial) }}" class="was-validated" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="Id_Sede" id="Id_Sede" value="{{$Historia->id_historial}}" />

          <label>Paciente</label><br><select name="id_persona" id="id_persona" class="form-select" required>

            <option value="">Por favor selecione un Paciente</option>
            @foreach ( $Users as $user)
            @if ($user->rol == 2 )
            @if ($user->persona->id_persona == $Historia->personas->id_persona)
            <option value="{{$user->persona->id_persona}}" selected> {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
            @else
            <option value="{{$user->persona->id_persona}}" > {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
            @endif
            @endif
            @endforeach

        </select>

          <label>Sede</label><br><select name="id_sede" id="id_sede" class="form-select" required>

            <option value="">Por favor selecione una Sede</option>
            @foreach ( $Sedes as $sede)
            @if ($sede->id_sede == $Historia->id_sede)
            <option value="{{$sede->id_sede}}" selected> {{$sede->nombre_sede}}</option>
            @else
            <option value="{{$sede->id_sede}}" > {{$sede->nombre_sede}}</option>
            @endif
            @endforeach
        </select>


          <label>Medicos</label><br><select name="id_medico" id="id_medico" class="form-select" required>

            <option value="">Por favor selecione un Medico</option>
            @foreach ( $Users as $user)
            @if ($user->rol == 1 )
            @if ($user->id == $Historia->users->id)
            <option value="{{$user->id}}" selected> {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
            @else
            <option value="{{$user->id}}" > {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
            @endif
            @endif
            @endforeach
        </select>

          <label>Fecha de la historia</label></br>
          <input required type="datetime-local" name="fecha_historial" id="fecha_historial" value="{{$Historia->fecha_historial}}"  class="form-control"></br>

          <label>Detalles de la historia</label></br>
          <input required type="text" name="detalles_historial" id="detalles_historial" value="{{$Historia->detalles_historial}}"  class="form-control"></br>

          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
</x-layouts.app>
