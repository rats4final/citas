<x-layouts.app>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Historias</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Historial/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva Historia
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Persona</th>
                                        <th>Sede</th>
                                        <th>Medico</th>
                                        <th>Fecha del Historial</th>
                                        <th>Detalles de la Historia </th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Historias as $Historia)
                                    <tr>
                                        <td>{{ $Historia->personas->nombre_per ." ".$Historia->personas->apellido_pa_per ." ".$Historia->personas->apellido_ma_per }}</td>
                                        <td>{{ $Historia->sede->nombre_sede }}</td>
                                        <td>{{ $Historia->users->persona->nombre_per ." ". $Historia->users->persona->apellido_pa_per  ." ". $Historia->users->persona->apellido_ma_per}}</td>
                                        <td>{{ $Historia->fecha_historial}}</td>
                                        <td>{{ $Historia->detalles_historial }}</td>
                                        <td>
                                            <a href="{{ url('/Historial' . '/' . $Historia['id_historial']) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar</button></a>
                                            <a href="{{ url('/Historial' . '/' . $Historia->id_historial . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <form method="POST" action="{{ url('/Historial' . '/' . $Historia->id_historial) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
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
