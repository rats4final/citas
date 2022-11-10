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
                <input value="{{ $persona->ci_per }}" type="text" name="ci_per" class="form-control"></br>
                <label>Celular</label></br>
                <input value="{{ $persona->cel_per }}" type="text" name="cel_per" class="form-control"></br>
                <label>Fecha Nacimiento</label></br>
                <input value="{{ $persona->fecha_nac }}" type="date" name="fecha_nac" class="form-control"></br>
                <label>Numero de Seguro</label></br>
                <input value="{{ $persona->num_seguro }}" type="text" name="num_seguro" class="form-control"></br>
                <label>Es donante</label></br>
                <input value="{{ $persona->donante }}" type="text" name="donante" class="form-control"></br>
                <label>Tipo de Sangre</label></br>
                <input value="{{ $persona->id_tipo_sangre }}" type="text" name="id_tipo_sangre" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>
</x-layouts.app>

