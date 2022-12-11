<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Personas</div>
        <div class="card-body">

            <form action="{{ route('personas.store') }}" method="post">
                @csrf
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
                <label>Es donante</label></br>
                <select name="donante" class="form-control">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select><br>
                <input type="submit" value="Guardar" class="btn btn-success"></br>
            </form>

        </div>
    </div>
</x-layouts.app>
