
<x-layouts.app>
    <div class="card">
        <div class="card-header">Crear Tipo de Sangre</div>
        <div class="card-body">
            
            <form action="{{ url('TipoSangre') }}" method="post">
              {!! csrf_field() !!}
              <label>Tipo de Sangre</label></br>
              <input type="text" name="nombre_tipo_sangre" id="nombre_tipo_sangre" class="form-control"></br>
              <label>Descripcion</label></br>
              <input type="text" name="descripcion_tipo_sangre" id="descripcion_tipo_sangre" class="form-control"></br>
              <label>Rareza</label></br>
              <input type="text" name="rareza_tipo_sangre" id="rareza_tipo_sangre" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>
        
        </div>
      </div>
</x-layouts.app>
