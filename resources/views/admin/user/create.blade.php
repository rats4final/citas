<x-layouts.app>

    <div class="col-md-9">
    <div class="card">
        <div class="card-header">Registro de Usuario</div>
        <div class="card-body">
            <form action="{{ url('Usuario') }}" method="post">
              {!! csrf_field() !!}

              <label>Nombres</label></br>
                <input type="text" name="nombre_per" class="form-control"></br>
                <label>Apellido Paterno</label></br>
                <input type="text" name="apellido_pa_per" class="form-control"></br>
                <label>Apellido Materno</label></br>
                <input type="text" name="apellido_ma_per" class="form-control"></br>
                <label>Carnet de Identidad</label></br>
                <input type="number" name="ci_per" class="form-control"></br>
                <label>Celular</label></br>
                <input type="tel" name="cel_per" class="form-control"></br>
                <label>Fecha Nacimiento</label></br>
                <input type="date" name="fecha_nac" class="form-control"></br>
                <label>Numero de Seguro</label></br>
                <input type="number" name="num_seguro" class="form-control"></br>
                <label>Tipo de Sangre</label></br>
                <select class="form-control" name="id_tipo_sangre">
                    @foreach($tipos_sangre as $tipo_sangre)
                        <option value="{{ $tipo_sangre->id_tipo_sangre }}">{{$tipo_sangre->nombre_tipo_sangre}}</option>
                    @endforeach
                </select> <br>
                <label>Pariente Donante</label></br>
                <select class="form-control" name="id_pariente">
                    @foreach($personas as $persona)
                        <option value="{{ $persona->id_persona }}">{{$persona->nombre_per}}</option>
                    @endforeach
                </select> <br>
                <label>Es donante</label></br>
                <input type="text" name="donante" class="form-control"></br>
              <label>Usuario</label></br>
              <input type="text" name="username" id="id" class="form-control"></br>

              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control"></br>

              <label>Password</label></br>
              <input type="text" name="password" id="password" class="form-control"></br>

              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
    </div>

</x-layouts.app>
