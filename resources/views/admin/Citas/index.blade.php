<x-layouts.app>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Citas</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Citas/create') }}" class="btn btn-success btn-sm" title="Agregar">
                            <i class="fa fa-plus" aria-hid_tip_Citasden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Descripcion</th>
                                        <th>Paciente</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Citas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fecha_cita }}</td>
                                        <td>{{ $item->detalles_cita }}</td>
                                        <td>{{ $item->id_secretaria}}</td>
                                        <td>
                                            <a href="{{ url('/Citas/' . $item->id_citas . '/edit') }}" title="Edit Citas"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hid_tip_Citasden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Citas' . '/' . $item->id_citas) }}" accept-charset="UTF-8" style="display:inline">
                                               @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Citas" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hid_tip_Citasden="true"></i> Delete</button>
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
