<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Personas</div>
        <div class="card-body">

            <form action="{{ route('personas.update', $persona) }}" method="post">
                @csrf
                @method('PATCH')
                <label>Nombres</label></br>
                <input value="{{ $persona->nombre_per }}" type="text" name="nombre_per" class="form-control"></br>
                <label>Apellido Paterno</label></br>
                <input value="{{ $persona->apellido_pa_per }}" type="text" name="apellido_pa_per" class="form-control"></br>
                <label>Apellido Materno</label></br>
                <input value="{{ $persona->apellido_ma_per }}" type="text" name="apellido_ma_per" class="form-control"></br>
                <label>Carnet de Identidad</label></br>
                <input value="{{ $persona->ci_per }}" type="number" name="ci_per" class="form-control"></br>
                <label>Celular</label></br>
                <input value="{{ $persona->ci_per }}" type="tel" name="cel_per" class="form-control"></br>
                <label>Fecha Nacimiento</label></br>
                <input value="{{ $persona->fecha_nac->format('Y-m-d') }}" type="date" name="fecha_nac" class="form-control"></br>
                <label>Numero de Seguro</label></br>
                <input value="{{ $persona->num_seguro }}" type="number" name="num_seguro" class="form-control"></br>
                <label>Tipo de Sangre</label></br>
                <select class="form-control" name="id_tipo_sangre">
                    @foreach($tipos_sangre as $tipo_sangre)
                        <option value="{{ $tipo_sangre->id_tipo_sangre }}"
                            @if ($tipo_sangre->id_tipo_sangre == $persona->id_tipo_sangre)
                                selected
                            @endif
                            >{{$tipo_sangre->nombre_tipo_sangre}}</option>
                    @endforeach
                </select> <br>
                <label>Es donante</label></br>
                <select name="donante" class="form-control">
                    @if ($persona->donante==1)
                        <option value="1" selected>Si</option>
                        <option value="0">No</option>
                    @else
                        <option value="0" selected>No</option>
                        <option value="1">Si</option>
                    @endif
                </select><br>
                <input type="submit" value="Guardar" class="btn btn-success"></br>
            </form>
        </div>
    </div>
</x-layouts.app>

