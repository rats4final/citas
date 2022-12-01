<x-layouts.app>
    <div class="card">
        <div class="card-header">Crear Cita</div>
        <div class="card-body">

            <form action="{{ url('Citas') }}" method="post">
              {!! csrf_field() !!}
              <label>Fecha</label></br>
              <input type="date" name="fecha_cita" id="fecha_cita" class="form-control"></br>
              @error('fecha_cita')
              <small style="color: red">{{$message}}</small>
              @enderror
              <label>Detalles</label></br>
              <input value="{{old('detalles_cita')}}" type="text" name="detalles_cita" id="detalles_cita" class="form-control"></br>
              @error('detalles_cita')
              <small style="color: red">{{$message}}</small>
              @enderror
              <label>Paciente</label></br>
              <input value="{{old('id_secretarias')}}" type="text" name="id_secretaria" id="id_secretaria" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
