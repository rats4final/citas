<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Sedes</div>
        <div class="card-body">

            <form action="{{ url('sedes') }}" method="post">
              {!! csrf_field() !!}
              <label>Nombre sede</label></br>
              <input type="text" name="nombre_sede" id="nombre_sede" class="form-control"></br>
              <label>Direccion de sede</label></br>
              <input type="text" name="direccion_sede" id="direccion_sede" class="form-control"></br>
              <label>Telefono de la Sede</label></br>
              <input type="text" name="telefono_sede" id="telefono_sede" class="form-control"></br>

              <label>Ciudad Sede</label></br>
              <select class="form-select"  name="ciudad_sede" id="ciudad_sede"  aria-label="Default select example">
                <option selected>Selecione la ciudad</option>
                <option value="La Paz">La Paz</option>
                <option value="Santa Cruz">Santa cruz</option>
                <option value="Cochabamba">Cochabamba</option>
              </select>

              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
