<x-layouts.app>
<div class="card">
    <div class="card-header">Datos de la Sede</div>
    <div class="card-body">

          <div class="card-body">
          <h5 class="card-title">Nombre de la Sede : {{ $Sede->nombre_sede }}</h5>
          <p class="card-text">Dirreccion de la sede : {{ $Sede->direccion_sede }}</p>
          <p class="card-text">Telefono de la sede : {{ $Sede->telefono_sede }}</p>
          <p class="card-text">Ciudad de la Sede: {{ $Sede->ciudad_sede }}</p>
    </div>

      </hr>

    </div>
  </div>
</x-layouts.app>
