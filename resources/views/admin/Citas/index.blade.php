
<x-layouts.app>

        <div class="d-flex">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Citas</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Citas/create') }}" class="btn btn-success btn-sm" title="Agregar">
                            <i class="fa fa-plus" aria-hid_tip_Citasden="true"></i> Nueva Cita
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Paciente</th>
                                        <th>Medico</th>
                                        <th>Fecha</th>
                                        <th>Descripcion</th>
                                        <th>Estado</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Citas as $cita)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cita->medico->persona->nombre_per ." ".$cita->medico->persona->apellido_pa_per ." ".$cita->medico->persona->apellido_ma_per }}</td>
                                        <td>{{ $cita->paciente->persona->nombre_per ." ".$cita->paciente->persona->apellido_pa_per ." ".$cita->paciente->persona->apellido_ma_per }}</td>
                                        <td>{{ $cita->fecha_cita }}</td>
                                        <td>{{ $cita->detalles_cita }}</td>

                                        <td>@if ($cita->estado == 1)
                                            Activa

                                        @else
                                            Inactiva
                                        @endif</td>

                                        <td>
                                            <a href="{{ url('/Citas/' . $cita->id_cita . '/edit') }}" title="Edit Citas"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hid_tip_Citasden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Citas/' . '/' . $cita->id_cita) }}" accept-charset="UTF-8" style="display:inline">
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

</x-layouts.app>
