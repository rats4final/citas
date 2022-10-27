<x-layouts.app>
    <div class="card">
        <div class="card-header">Crear Tipo de Patologia</div>
        <div class="card-body">

            <form action="{{ url('TipoPatologia') }}" method="post">
              {!! csrf_field() !!}
              <label>Tipo de Patologia</label></br>
              <input type="text" name="nombre_patologia" id="nombre_patologia" class="form-control"></br>
              <label>Descripcion</label></br>
              <input type="text" name="desc_patologia" id="desc_patologia" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
