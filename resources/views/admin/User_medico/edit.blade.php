<x-layouts.app>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">

<br>
  <div class="card">
      <div class="card-header">Actualizacion de un medico</div>
      <div class="card-body">
          <form action="{{ url('Medico/' .$usuarios->id) }}" class="was-validated" method="post">
            {!! csrf_field() !!}
          @method("PATCH")

               <label>Nombres</label></br>
              <input type="text" name="nombre_per" value="{{$usuarios->persona->nombre_per}}" class="form-control" required></br>


              <label>Apellido Paterno</label></br>
              <input type="text" name="apellido_pa_per" value="{{$usuarios->persona->apellido_pa_per}}" class="form-control" required></br>


              <label>Apellido Materno</label></br>
              <input type="text" name="apellido_ma_per" value="{{$usuarios->persona->apellido_ma_per}}" class="form-control" required></br>


              <label>Carnet de Identidad</label></br>
              <input type="number" name="ci_per" value="{{$usuarios->persona->ci_per}}" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,7) ;" class="form-control" required></br>


              <label>Celular</label></br>
              <input type="tel" name="cel_per" value="{{$usuarios->persona->cel_per}}" pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,8) ;" class="form-control" required></br>


              <label>Fecha Nacimiento</label></br>
              <input type="datetime" name="fecha_nac" value="{{$usuarios->persona->fecha_nac}}" class="form-control" required></br>

              <label for="">Especialidades</label><br>
              <select name="especialidades[]" required class="selectpicker form-control" multiple >
                @foreach ( $especialidades as $especialidad )
                    <option  value="{{$especialidad->id_especialidad}}" >{{$especialidad->nombre_especialidad}}</option>
                @endforeach
              </select><br>

{{--
              <label for="">Especialidades</label><br>
              <select name="especialidades[]" class="selectpicker form-control" multiple >
                @foreach ( $especialidades as $especialidad )
                @foreach ($usuarios->persona->has_especialidad as $has)
                  @if ($especialidad->id_especialidad == $has->id_especialidad)
                  <option selected  value="{{$especialidad->id_especialidad}}" >{{$especialidad->nombre_especialidad}}</option>
                  @else
                  <option  value="{{$has->id_especialidad}}" >{{$especialidad->nombre_especialidad}}</option>
                  @endif
                @endforeach

                    {{-- <option  value="{{$especialidad->id_especialidad}}" >{{$especialidad->nombre_especialidad}}</option>
                @endforeach
              {{-- </select><br>  --}}


              <label>Numero de Seguro</label></br>
              <input type="number" name="num_seguro" value="{{$usuarios->persona->num_seguro}}"  pattern="[0-9]{1,10}" oninput="this.value = this.value.replace(/[^0-9.]+/g, '').slice(0,11) ;" class="form-control" required></br>


              <label>Tipo de Sangre</label></br>
              <select class="form-control" required name="id_tipo_sangre">
                  @foreach($tipos_sangre as $tipo_sangre)
                  @if ($tipo_sangre->id_tipo_sangre ==$usuarios->persona->id_tipo_sangre )
                  <option selected value="{{ $tipo_sangre->id_tipo_sangre }}">{{$tipo_sangre->nombre_tipo_sangre}}</option>
                  @else
                  <option  value="{{ $tipo_sangre->id_tipo_sangre }}">{{$tipo_sangre->nombre_tipo_sangre}}</option>
                  @endif




                  @endforeach
              </select> <br>



              <label>Es donante</label></br>
              <input type="text" name="donante" value="{{$usuarios->persona->donante}}" class="form-control" required></br>


            <label>Usuario</label></br>
            <input type="text" value="{{$usuarios->username}}" name="username" id="id" class="form-control" required></br>


            <label>Email</label></br>
            <input type="text" value="{{$usuarios->email}}" name="email" id="email" class="form-control" required></br>


            <label>Password</label></br>
            <input type="text" name="password" placeholder="Solo en caso de cambio" id="password" class="form-control" ></br>


            <input type="submit" value="Guardar" class="btn btn-success"></br>
        </form>

      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
     $('select').selectpicker();
  </script>
</x-layouts.app>
