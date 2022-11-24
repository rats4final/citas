<x-layouts.app>

    <div class="col-md-9">
    <div class="card">
        <div class="card-header">Registro de Usuario</div>
        <div class="card-body">
            <form action="{{ url('Usuario') }}" method="post">
              {!! csrf_field() !!}
              <label>Usuario</label></br>
              <input type="text" name="id" id="id" class="form-control"></br>

              <label>Nombre</label></br>
              <input type="text" name="name" id="name" class="form-control"></br>

              <label>Nombre Usuario</label></br>
              <input type="text" name="username" id="username" class="form-control"></br>

              <label>Estado</label></br>
              <input type="text" name="estado" id="estado" class="form-control"></br>

              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control"></br>

              <label>Password</label></br>
              <input type="text" name="password" id="password" class="form-control"></br>

              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>

        </div>
      </div>
    </div>

</x-layouts.app>
