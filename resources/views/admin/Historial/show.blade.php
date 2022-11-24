<x-layouts.app>
<div class="card">
    <div class="card-header">Datos de la Historia</div>
    <div class="card-body">

          <div class="card-body">
            <h5  class="card-title">Datos de la Historia</h5>
          <p class="card-text">Nombre de la Persona: {{ $Historial->personas->nombre_per ." ".$Historial->personas->apellido_pa_per ." ".$Historial->personas->apellido_ma_per }}</p>
          <p class="card-text">Nombre de la Sede : {{ $Historial->sede->nombre_sede }}</p>
          <p class="card-text">Nombre del Medico : {{ $Historial->users->persona->nombre_per ." ". $Historial->users->persona->apellido_pa_per  ." ". $Historial->users->persona->apellido_ma_per }}</p>
          <p class="card-text">Fecha del Historial: {{ $Historial->fecha_historial }}</p>
          <p class="card-text">Detalles de la Historia: {{ $Historial->detalles_historial }}</p>
    </div>

      </hr>

    </div>
  </div>
</x-layouts.app>
