<x-layouts.app>
    <div class="card">
        <div class="card-header">Registro de Relaciones</div>
        <div class="card-body">

            <form action="{{ route('TipoRelacion.store') }}" method="post">
                @csrf
                <label>Relacion</label></br>
                <select class="form-control" name="relacion">
                    <option>Padre</option>
                    <option>Madre</option>
                    <option>Hermano(a)</option>
                    <option>Tio(a)</option>
                </select>
                <label>Persona 1</label></br>
                <select class="form-control" name="id_persona">
                    @foreach($personas as $persona)
                        <option value="{{$persona->id_persona}}">{{$persona->nombre_per}}</option>
                    @endforeach
                </select>
                <label>Persona 2</label></br>
                <select class="form-control" name="id_pariente">
                    @foreach($personas as $pariente)
                        <option value="{{$pariente->id_persona}}">{{$pariente->nombre_per}}</option>
                    @endforeach
                </select><br>
                <input type="submit" value="Guardar" class="btn btn-success"></br>
            </form>
        </div>
    </div>
</x-layouts.app>
