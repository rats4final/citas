<x-layouts.app>
    <div class="card">
        <div class="card-header">Editar tipo de Patologia</div>
        <div class="card-body">

            <form action="{{ url('Citas/' .$Citas->id_cita) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id_cita" id="id_cita" value="{{$Citas->id_cita}}" id="id_cita" />
              <label>Fecha</label></br>
              <input type="date" name="fecha_cita" id="fecha_cita" value="{{$Citas->fecha_cita}}" class="form-control"></br>
              <label>Descripcion</label></br>
              <input type="text" name="detalles_cita" id="detalles_cita" value="{{$Citas->detalles_cita}}" class="form-control"></br>
              <label>Paciente</label></br>
              <input type="text" name="id_secretaria " id="id_secretaria " value="{{$Citas->id_secretaria }}" class="form-control"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>

