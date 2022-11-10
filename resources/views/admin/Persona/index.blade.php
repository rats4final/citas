<x-layouts.app>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Personas</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm" title="Añadir nueva Persona">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva Persona
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>AP</th>
                                        <th>AM</th>
                                        <th>CI</th>
                                        <th>Celular</th>
                                        <th>Fecha Nac</th>
                                        <th># Seguro</th>
                                        <th>Es donante</th>
                                        <th>Tipo Sangre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ $persona->nombre_per }}</td>
                                            <td>{{ $persona->apellido_pa_per }}</td>
                                            <td>{{ $persona->apellido_ma_per }}</td>
                                            <td>{{ $persona->ci_per }}</td>
                                            <td>{{ $persona->cel_per }}</td>
                                            <td>{{ $persona->fecha_nac }}</td>
                                            <td>{{ $persona->num_seguro }}</td>
                                            <td>{{ $persona->donante }}</td>
                                            <td>{{ $persona->id_tipo_sangre }}</td>
                                            <td>
                                                <a href="{{ route('personas.show', $persona) }}"
                                                    title="View Student"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i>
                                                        Mostrar</button></a>
                                                <a href="{{ route('personas.edit', $persona) }}"
                                                    title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>
                                                <form method="POST" action="{{ route('personas.destroy', $persona) }}"
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
