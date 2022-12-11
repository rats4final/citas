<x-layouts.app>

    <div class="col-md-9">
    <div class="card">
        <div class="card-header">Registro de Historias</div>
        <div class="card-body">

            <form action="{{ url('Historial') }}" class="was-validated" method="post">
              {!! csrf_field() !!}
              {{-- <label>Persona</label></br>
              <input type="text" name="id_persona" id="id_persona" class="form-control"></br> --}}

              <label>Pacientes</label><br><select class="form-control" name="id_persona" id="id_persona" required>

                <option value="">Por favor selecione un paciente</option>
                @foreach ( $Users as $user)
                @if ($user->rol == 2 )

                <option value="{{$user->persona->id_persona}}"> {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
                @endif
                @endforeach

            </select><br>


              <label>Sedes</label><br><select name="id_sede" id="id_sede" class="form-control" required>

                <option value=""> Selecione una Sede </option>
                @foreach ( $Sedes as $sede)

                <option value="{{$sede->id_sede}}"> {{$sede->nombre_sede}}</option>

                @endforeach

            </select><br>


              <label>Medicos</label><br><select name="id_medico" id="id_medico" class="form-control" required>

                <option value="">Por favor selecione un medico</option>
                @foreach ( $Users as $user)
                @if ($user->rol == 1 )
                <option value="{{$user->id}}"> {{$user->persona->nombre_per ." ". $user->persona->apellido_pa_per ." ". $user->persona->apellido_ma_per }}</option>
                @endif
                @endforeach

            </select><br>

              <label>Fecha de la historia</label></br>
              <input type="datetime-local" name="fecha_historial" id="fecha_historial" min="2022-11-26 00:00" max="2022-12-30 10:00" class="form-control" required></br>

              <label>Detalles de la historia</label></br>
              <input type="text" name="detalles_historial" id="detalles_historial" class="form-control" required>
              @error('detalles_historial')
              <li class="text-danger">{{$message}}</li><br>
              @enderror
            </br>


              <input type="submit" value="Subir la Historia" class="btn btn-success"></br>
          </form>

        </div>
      </div>
    </div>
</x-layouts.app>
