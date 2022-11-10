<x-layouts.app>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Tipo Relacion</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('TipoRelacion.create') }}" class="btn btn-success btn-sm" title="Añadir nueva Persona">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva Relacion
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <caption>Todas la relaciones</caption>
                                <thead>
                                <tr>
                                    <th>Relacion</th>
                                    <th>Persona 1</th>
                                    <th>Persona 2</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($TipoRelaciones as $TipoRelacion)
                                    <tr>
                                        <td>{{ $TipoRelacion->relacion }}</td>
                                        <td>{{ $TipoRelacion->persona->nombre_per }}</td>
                                        <td>{{ $TipoRelacion->pariente->nombre_per }}</td>
                                        <td>
                                            <a href="{{ route('TipoRelacion.show', $TipoRelacion) }}"
                                               title="View Student"><button class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye" aria-hidden="true"></i>
                                                    Mostrar</button></a>
                                            <a href="{{ route('TipoRelacion.edit', $TipoRelacion) }}"
                                               title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Editar</button></a>
                                            <form method="POST" action="{{ route('TipoRelacion.destroy', $TipoRelacion) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Student"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>
                                                    Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
