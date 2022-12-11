<x-layouts.app>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Personas</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm"
                            title="Añadir nueva Persona">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva Persona
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
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
                                        <th>Pariente</th>
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
                                            <td>
                                                @if ($persona->donante == 1)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-clipboard-x"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                                                        <path
                                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                        <path
                                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    </svg>
                                                @endif
                                            </td>
                                            <td>{{ $persona->tipo_sangre->nombre_tipo_sangre }}</td>
                                            <td>{{ $persona->pariente->nombre_per }}</td>
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
