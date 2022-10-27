<x-layouts.app>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Patologia</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Patologia/create') }}" class="btn btn-success btn-sm" title="Agregar">
                            <i class="fa fa-plus" aria-hid_tip_patologiaden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patologia</th>
                                        <th>Descripcion</th>
                                        <th>Tipo Patologia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Patologia as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre_patologia }}</td>
                                        <td>{{ $item->detalle_patologia }}</td>
                                        <td>{{ $item->tipo_patologia->nombre_patologia}}</td>
                                        <td>
                                            <a href="{{ url('/Patologia/' . $item->id_patologia . '/edit') }}" title="Edit Patologia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hid_tip_patologiaden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Patologia' . '/' . $item->id_patologia) }}" accept-charset="UTF-8" style="display:inline">
                                               @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Patologia" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hid_tip_patologiaden="true"></i> Delete</button>
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
