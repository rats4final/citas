<x-layouts.app>
    <div class="card">
        <div class="card-header">Crear Cita</div>
        <div class="card-body">

            <form action="{{ url('Citas') }}" method="post">
              {!! csrf_field() !!}
              <label>Fecha</label></br>
              <input type="date" name="fecha_cita" id="fecha_cita" class="form-control"></br>
              <label>Detalles</label></br>
              <input type="text" name="detalles_cita" id="detalles_cita" class="form-control"></br>
              <label>Paciente</label></br>
              <input type="text" name="id_secretaria" id="id_secretaria" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
