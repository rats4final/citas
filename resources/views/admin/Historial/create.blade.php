<x-layouts.app>

    <div class="col-md-9">
    <div class="card">
        <div class="card-header">Registro de Historias</div>
        <div class="card-body">

            <form action="{{ url('Historial') }}" method="post">
              {!! csrf_field() !!}
              <label>Persona</label></br>
              <input type="text" name="id_persona" id="id_persona" class="form-control"></br>
              <label>Sede</label></br>
              <input type="text" name="id_sede" id="id_sede" class="form-control"></br>
              <label>Medico</label></br>
              <input type="text" name="id_medico" id="id_medico" class="form-control"></br>

              <label>Fecha de la historia</label></br>
              <input type="date" name="fecha_historial" id="fecha_historial" class="form-control"></br>

              <label>Detalles de la historia</label></br>
              <input type="text" name="detalles_historial" id="detalles_historial" class="form-control"></br>


              {{-- <label>Ciudad Sede</label></br>
              <select class="form-select"  name="ciudad_sede" id="ciudad_sede"  aria-label="Default select example">
                <option selected>Selecione la ciudad</option>
                <option value="La Paz">La Paz</option>
                <option value="Santa Cruz">Santa cruz</option>
                <option value="Cochabamba">Cochabamba</option>
              </select> --}}

              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
    </div>

</x-layouts.app>
