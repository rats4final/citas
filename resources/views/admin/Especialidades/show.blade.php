<x-layouts.app>
  <div class="card">
      <div class="card-header">Datos de la especialidad</div>
      <div class="card-body">

            <div class="card-body">
              <h5  class="card-title">Datos de la especialidad</h5>
            <p class="card-text">Nombre de la especialidad: {{ $Especialidad->nombre_especialidad }}</p>
            <p class="card-text">Descripcion de la especialidad : {{ $Especialidad->descripcion_especialidad }}</p>

      </div>

        </hr>

      </div>
    </div>
  </x-layouts.app>
