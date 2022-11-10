<x-layouts.app>
    <div class="card">
        <div class="card-header">Datos de la Persona</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Nombres : {{ $persona->nombre_per }}</h5>
                <p class="card-text">Apellido Paterno: {{ $persona->apellido_pa_per }}</p>
                <p class="card-text">Apellido Materno : {{ $persona->apellido_ma_per }}</p>
                <p class="card-text">Carnet de Identidad: {{ $persona->ci_per }}</p>
                <p class="card-text">Celular: {{ $persona->cel_per }}</p>
                <p class="card-text">Fecha de Nacimiento: {{ $persona->fecha_nac }}</p>
                <p class="card-text">Numero de Seguro: {{ $persona->num_seguro }}</p>
                <p class="card-text">Es donante: {{ $persona->donante }}</p>
                <p class="card-text">Tipo de Sangre: {{ $persona->id_tipo_sangre }}</p>
            </div>
            </hr>
        </div>
    </div>
</x-layouts.app>
