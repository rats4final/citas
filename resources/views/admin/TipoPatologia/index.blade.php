<x-layouts.app>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Tipo de Patologia</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/TipoPatologia/create') }}" class="btn btn-success btn-sm" title="Agregar">
                            <i class="fa fa-plus" aria-hid_tip_patologiaden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo de Patologia</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($TipoPatologia as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre_patologia }}</td>
                                        <td>{{ $item->desc_patologia }}</td>
                                        <td>
                                            <a href="{{ url('/TipoPatologia/' . $item->id_tip_patologia . '/edit') }}" title="Edit TipoPatologia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hid_tip_patologiaden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/TipoPatologia' . '/' . $item->id_tip_patologia) }}" accept-charset="UTF-8" style="display:inline">
                                               @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete TipoPatologia" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hid_tip_patologiaden="true"></i> Delete</button>
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
