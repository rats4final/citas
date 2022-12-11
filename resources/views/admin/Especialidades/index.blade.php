<x-layouts.app>
<div class="d-flex">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Especialidades</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/especialidad/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Nueva especialidad
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre de la especialidad</th>
                                    <th>Descripcion de la especialidad</th>

              <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Especialidades as $Especialidad)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Especialidad['nombre_especialidad'] }}</td>
                                    <td>{{ $Especialidad['descripcion_especialidad'] }}</td>

                                    <td>
                                        <a href="{{ url('/especialidad' . '/' . $Especialidad->id_especialidad) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar</button></a>
                                        <a href="{{ url('/especialidad' . '/' . $Especialidad->id_especialidad . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        <form method="POST" action="{{ url('/especialidad' . '/' . $Especialidad->id_especialidad) }}" accept-charset="UTF-8" style="display:inline">
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
</x-layouts.app>
