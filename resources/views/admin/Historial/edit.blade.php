<x-layouts.app>

<div class="card">
    <div class="card-header">Editar Sede</div>
    <div class="card-body">

        <form action="{{ url('Historial/' .$Historia->id_historial) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="Id_Sede" id="Id_Sede" value="{{$Historia->id_historial}}" />

          <label>Persona</label></br>
          <input type="text" name="id_persona" id="id_persona" value="{{$Historia->id_persona}}" class="form-control"></br>
          <label>Sede</label></br>
          <input type="text" name="id_sede" id="id_sede" value="{{$Historia->id_sede}}"  class="form-control"></br>
          <label>Medico</label></br>
          <input type="text" name="id_medico" id="id_medico" value="{{$Historia->id_medico}}"  class="form-control"></br>

          <label>Fecha de la historia</label></br>
          <input type="date" name="fecha_historial" id="fecha_historial" value="{{$Historia->fecha_historial}}"  class="form-control"></br>

          <label>Detalles de la historia</label></br>
          <input type="text" name="detalles_historial" id="detalles_historial" value="{{$Historia->detalles_historial}}"  class="form-control"></br>



          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
</x-layouts.app>
