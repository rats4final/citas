<x-layouts.app>

    <div class="card">
        <div class="card-header">Registro de Usuario</div>
        <div class="card-body">
            <form action="{{ url('Usuario') }}" class="was-validated" method="post">
              {!! csrf_field() !!}

                 <label>Nombres</label></br>
                <input type="text" name="nombre_per" class="form-control" required></br>


                <label>Apellido Paterno</label></br>
                <input type="text" name="apellido_pa_per" class="form-control" required></br>


                <label>Apellido Materno</label></br>
                <input type="text" name="apellido_ma_per" class="form-control" required></br>


                <label>Carnet de Identidad</label></br>
                <input type="number" name="ci_per" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,7) ;" class="form-control" required></br>


                <label>Celular</label></br>
                <input type="tel" name="cel_per" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,8) ;" class="form-control" required></br>


                <label>Fecha Nacimiento</label></br>
                <input type="date" name="fecha_nac" class="form-control" required></br>


                <label>Numero de Seguro</label></br>
                <input type="number" name="num_seguro" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,11) ;" class="form-control" required></br>


                <label>Tipo de Sangre</label></br>
                <select class="form-control" required name="id_tipo_sangre">
                    @foreach($tipos_sangre as $tipo_sangre)
                        <option value="{{ $tipo_sangre->id_tipo_sangre }}">{{$tipo_sangre->nombre_tipo_sangre}}</option>
                    @endforeach
                </select> <br>



                <label>Es donante</label></br>
                <input type="text" name="donante" class="form-control" required></br>


              <label>Usuario</label></br>
              <input type="text" name="username" id="id" class="form-control" required></br>


              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control" required></br>


              <label>Password</label></br>
              <input type="text" name="password" id="password" class="form-control" required></br>


              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>

</x-layouts.app>
