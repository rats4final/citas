<x-layouts.app>
    <div class="card">
        <div class="card-header">Crear Tipo de Patologia</div>
        <div class="card-body">

            <form action="{{ url('Patologia') }}" method="post">
              {!! csrf_field() !!}
              <label>Patologia</label></br>
              <input type="text" name="nombre_patologia" id="nombre_patologia" class="form-control"></br>
              <label>Tipo de Patologia</label></br>
              <input type="text" name="id_tip_patologia" id="id_tip_patologia" class="form-control"></br>
              <label>Detalle</label></br>
              <input type="text" name="detalle_patologia" id="detalle_patologia" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
