
<x-layouts.app>
    <div class="card">
        <div class="card-header">Editar tipo de sangre</div>
        <div class="card-body">
            
            <form action="{{ url('TipoSangre/' .$TipoSangre->id_tipo_sangre) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id_tipo_sangre" id="id_tipo_sangre" value="{{$TipoSangre->id_tipo_sangre}}" id="id_tipo_sangre" />
              <label>Tipo de Sangre</label></br>
              <input type="text" name="nombre_tipo_sangre" id="nombre_tipo_sangre" value="{{$TipoSangre->nombre_tipo_sangre}}" class="form-control"></br>
              <label>Descripcion</label></br>
              <input type="text" name="descripcion_tipo_sangre" id="descripcion_tipo_sangre" value="{{$TipoSangre->descripcion_tipo_sangre}}" class="form-control"></br>
              <label>Rareza</label></br>
              <input type="text" name="rareza_tipo_sangre" id="rareza_tipo_sangre" value="{{$TipoSangre->rareza_tipo_sangre}}" class="form-control"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>
        
        </div>
      </div>
</x-layouts.app>
