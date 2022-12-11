<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Sedes</div>
        <div class="card-body">

            <form action="{{ url('sedes') }}" class="was-validated" method="post">
              {!! csrf_field() !!}
              <label>Nombre sede</label></br>
              <input type="text" name="nombre_sede" id="nombre_sede" class="form-control" required>
              @error('nombre_sede')
            <li class="text-danger">{{$message}}</li>
            @enderror

            </br>
              <label>Direccion de sede</label></br>
              <input type="text" name="direccion_sede" id="direccion_sede" class="form-control" required>
              @error('direccion_sede')
            <li class="text-danger">{{$message}}</li>
            @enderror

            </br>
              <label>Telefono de la Sede</label></br>
              <input type="text" name="telefono_sede" id="telefono_sede" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,8) ;" class="form-control" required>
              @error('telefono_sede')
              <li class="text-danger">{{$message}}</li>
              @enderror</br>

              <label>Ciudad Sede</label></br>
              <select class="form-select"  name="ciudad_sede" id="ciudad_sede" required aria-label="Default select example">
                <option selected value="">Selecione la ciudad</option>
                <option value="La Paz">La Paz</option>
                <option value="Santa Cruz">Santa cruz</option>
                <option value="Cochabamba">Cochabamba</option>
              </select>

              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
</x-layouts.app>
