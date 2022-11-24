    <x-layouts.app>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>Usuarios</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('/Usuario/create') }}" class="btn btn-success btn-sm" title="Añadir nueva usuario">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nueva Usuario
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
                                            <th>Pariente</th>
                                            <th>Username</th>
                                            <th>Correo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                        @if ($usuario->estado==1)
                                        <tr>
                                            <td>{{ $usuario->persona->nombre_per }}</td>
                                            <td>{{ $usuario->persona->apellido_pa_per }}</td>
                                            <td>{{ $usuario->persona->apellido_ma_per }}</td>
                                            <td>{{ $usuario->persona->ci_per }}</td>
                                            <td>{{ $usuario->persona->cel_per }}</td>
                                            <td>{{ $usuario->persona->fecha_nac }}</td>
                                            <td>{{ $usuario->persona->num_seguro }}</td>
                                            <td>{{ $usuario->persona->donante }}</td>
                                            <td>{{ $usuario->persona->tipo_sangre->nombre_tipo_sangre }}</td>
                                            <td>{{ $usuario->persona->pariente->nombre_per }}</td>

                                            <td>{{ $usuario->username }}</td>

                                            <td>{{ $usuario->email }}</td>

                                            <td>
                                                <a href=""
                                                    title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>
                                                <form method="POST" action="{{ url('/Usuario' . '/' . $usuario->id) }}"
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
                                        @endif

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
