<x-layouts.app>
<div class="d-flex">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Sedes</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/sedes/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Nueva Sede
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre de la Sede</th>
              <th>Dirrecion de la Sede</th>
              <th>Telefono Sede</th>
              <th>Ciudad Sede</th>
              <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Sedes as $Sede)
                                <tr>
                                    <td>{{ $Sede['nombre_sede'] }}</td>
                                    <td>{{ $Sede['direccion_sede'] }}</td>
                                    <td>{{ $Sede['telefono_sede'] }}</td>
                                    <td>{{ $Sede['ciudad_sede'] }}</td>
                                    <td>
                                        <a href="{{ url('/sedes' . '/' . $Sede->id_sede) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar</button></a>
                                        <a href="{{ url('/sedes' . '/' . $Sede->id_sede . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        <form method="POST" action="{{ url('/sedes' . '/' . $Sede->id_sede) }}" accept-charset="UTF-8" style="display:inline">
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
