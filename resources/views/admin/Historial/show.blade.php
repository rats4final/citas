<x-layouts.app>
<div class="card">
    <div class="card-header">Datos de la Historia</div>
    <div class="card-body">

          <div class="card-body">
          <h5 class="card-title">Nombre de la Persona: {{ $Historial->id_persona }}</h5>
          <p class="card-text">Nombre de la Sede : {{ $Historial->id_sede }}</p>
          <p class="card-text">Nombre del Medico : {{ $Historial->id_medico }}</p>
          <p class="card-text">Fecha del Historial: {{ $Historial->fecha_historial }}</p>
          <p class="card-text">Detalles de la Historia: {{ $Historial->detalles_historial }}</p>
    </div>

      </hr>

    </div>
  </div>
</x-layouts.app>
