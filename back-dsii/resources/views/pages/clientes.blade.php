@extends ('layouts.app')

@section('content')
    <h1> <br> <br> Clientes</h1>

    <form class="margins">
        <div class="form-group">
          <input type="text" class="form-control" id="id_cliente"placeholder="Ingresar documento">
          
        </div>
        <div>
            <button type="button" class="btn btn-primary">Buscar</button>
            <button type="button" class="btn btn-primary" onclick="" >Consultar todos</button>
        </div>
    </form>


    @if(count($clientes) > 0 )
        @foreach ($clientes as $cliente)
            <div class="well">
                <!--<h3>{{$cliente->nombre_completo}}</h3>-->

                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Número de documento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>{{$cliente->nombre_completo}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->documento}}</td>
                      </tr>
                    </tbody>
                  </table>
                  
            </div>
        @endforeach
    @else
        <p>No hay clientes registrados</p>
        @endif
@endsection


