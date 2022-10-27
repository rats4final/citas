<x-layouts.app>
    <div class="card">
        <div class="card-header">Editar tipo de Patologia</div>
        <div class="card-body">

            <form action="{{ url('TipoPatologia/' .$TipoPatologia->id_tip_patologia) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id_patologia" id="id_tip_patologia" value="{{$TipoPatologia->id_tip_patologia}}" id="id_tip_patologia" />
              <label>Tipo de Patologia</label></br>
              <input type="text" name="nombre_patologia" id="nombre_patologia" value="{{$TipoPatologia->nombre_patologia}}" class="form-control"></br>
              <label>Descripcion</label></br>
              <input type="text" name="desc_patologia" id="desc_patologia" value="{{$TipoPatologia->desc_patologia}}" class="form-control"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>

