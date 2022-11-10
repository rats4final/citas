<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Relaciones</div>
        <div class="card-body">

            <form action="{{ route('TipoRelacion.store') }}" method="post">
                @csrf
                <label>Relacion</label></br>
                <input type="text" name="relacion" class="form-control"></br>
                <label>Persona 1</label></br>
                <input type="text" name="id_persona" class="form-control"></br>
                <label>Persona 2</label></br>
                <input type="text" name="id_pariente" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>
</x-layouts.app>
