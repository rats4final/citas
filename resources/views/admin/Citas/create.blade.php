<x-layouts.app>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="card">
        <div class="card-header">Crear Cita</div>
        <div class="card-body">

            <form action="{{ url('Citas') }}" method="post">
              {!! csrf_field() !!}
              <div class="row">
              <div class="col-6">
                <label for="">Especialidad</label>

                <select name="especialidad" class="form-control" id="select1">
                    <option value="" selected>Selecione una especialidad</option>
                    @foreach ($Especialidades as $Especialidad)
                    <option value="{{$Especialidad->id_especialidad}}"> {{$Especialidad->nombre_especialidad}} </option>
                    @endforeach


                </select>
            </div>

            <div class="col-6">
                <label for="">Medico</label>

                <select name="id_medico" class="form-control" disabled id="select2">
                    @foreach ($Users as $User)
                    @if ($User->rol == 1)
                    <option value="" selected>Selecione un Medico</option>
                    @foreach ($User->persona->has_especialidad as $has)
                    <option data-name="{{$has->id_especialidad}}" value="{{$User->id}}"> {{$User->persona->nombre_per." ". $User->persona->apellido_pa_per ." ". $User->persona->apellido_ma_per}} </option>
                    @endforeach
                    @endif
                    @endforeach


                </select>
            </div>
          </div>

              <label>Fecha</label></br>
              <input type="datetime-local" name="fecha_cita" id="fecha_cita" class="form-control"></br>
              @error('fecha_cita')
              <small style="color: red">{{$message}}</small>
              @enderror


              <label>Detalles</label></br>
              <input value="{{old('detalles_cita')}}" type="text" name="detalles_cita" id="detalles_cita" class="form-control"></br>
              @error('detalles_cita')
              <small style="color: red">{{$message}}</small>
              @enderror


              {{-- <label>Paciente</label></br>
              <input value="{{old('id_secretarias')}}" type="text" name="id_secretaria" id="id_secretaria" class="form-control"></br>
              @error('detalles_cita')
              <small style="color: red">{{$message}}</small>
              @enderror --}}
              <input type="submit" value="Registrar Cita" class="btn btn-success"></br>
          </form>

        </div>
      </div>
      <script>
        $( function() {
            $("#select1").change( function() {
                if ($(this).val() === "") {
                    $("#select2").prop("disabled", true);
                } else {
                    $("#select2").prop("disabled", false);
                }
            });
        });
            $("#select1").change(function () {

                        if ($(this).data('options') == undefined) {
                            $(this).data('options', $('#select2 option').clone());
                        }
                        var id = $(this).val();
                        if (id == "all") {
                            var options = $(this).data('options');
                            $('#select2').html(options);
                        }
                        else {
                            var options = $(this).data('options').filter('[data-name=' + id + ']');
                            $('#select2').html(options);
                        }
                    });
                </script>
</x-layouts.app>
