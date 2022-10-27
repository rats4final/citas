<x-layouts.app>

<div class="card">
    <div class="card-header">Editar Sede</div>
    <div class="card-body">

        <form action="{{ url('sedes/' .$Sede->id_sede) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="Id_Sede" id="Id_Sede" value="{{$Sede->id_sede}}" />

          <label>Name</label></br>
          <input type="text" name="nombre_sede" id="nombre_sede" value="{{$Sede->nombre_sede}}" class="form-control"></br>
          <label>Dirrecion de la sede</label></br>
          <input type="text" name="direccion_sede" id="direccion_sede" value="{{$Sede->direccion_sede}}" class="form-control"></br>
          <label>telefono_sede</label></br>
          <input type="text" name="telefono_sede" id="telefono_sede" value="{{$Sede->telefono_sede}}" class="form-control"></br>
          <label>Ciudad sede</label></br>
          <select class="form-select"  name="ciudad_sede" id="ciudad_sede"  aria-label="Default select example">
            <option selected>Selecione la ciudad</option>
            <option value="La Paz">La Paz</option>
            <option value="Santa Cruz">Santa cruz</option>
            <option value="Cochabamba">Cochabamba</option>
          </select>


          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
</x-layouts.app>
