@extends ('layouts.app')

@section('content')

<div class="card" style="width: 60rem; margin:auto">
  <form style="margin:3rem">
    <h1> <br>Consultar proveedores</h1>
    
    <form class="margins">
        <div class="form-group">
          <input type="text" class="form-control" id="id_cliente"placeholder="Ingresar documento">
          
        </div>
        <div>
            <button type="button" class="btn btn-primary">Buscar</button>
            <button type="button" class="btn btn-primary" onclick= "function miFuncion(){alert($consultarTodos = True)}" >Consultar todos</button>
        </div>
        </form>
        <div class="well">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Tipo de documento</th>
                    <th scope="col">Número de documento</th>
                    <th scope="col">Descuento</th>
                  </tr>
                </thead>
              </table>
              
              </div><div style="margin:auto">
                <p style="color: red; font-size: 16px">No hay clientes registrados</p>
              </div>
          
        </form>
    </div> 
@endsection


