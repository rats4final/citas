<x-layouts.app>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Tipo de Sangre</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/TipoSangre/create') }}" class="btn btn-success btn-sm" title="Agregar">
                            <i class="fa fa-plus" aria-hid_tipo_sangreden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo de Sangre</th>
                                        <th>Descripcion</th>
                                        <th>Rareza</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($TipoSangre as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre_tipo_sangre }}</td>
                                        <td>{{ $item->descripcion_tipo_sangre }}</td>
                                        <td>{{ $item->rareza_tipo_sangre }}</td>
                                        <td>
                                            <a href="{{ url('/TipoSangre/' . $item->id_tipo_sangre . '/edit') }}" title="Edit TipoSangre"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hid_tipo_sangreden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/TipoSangre' . '/' . $item->id_tipo_sangre) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete TipoSangre" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hid_tipo_sangreden="true"></i> Delete</button>
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
