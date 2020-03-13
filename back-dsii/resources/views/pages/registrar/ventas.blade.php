@extends ('layouts.app')

@section('content')
   <div style="">
    <div class="card" style="width: 40rem; margin:auto">
        

<form method="POST" style="margin:3rem">
    <h1> <br> REGISTRAR VENTA</h1>
    <div class="form-group" > 
        <label for="full_name_id" class="control-label">NUMERO FACTURA</label>
        <input type="text" class="form-control" id="num_factura_id" name="num_factura">
    </div>    

    <div class="form-group" > 
        <label for="full_name_id" class="control-label">Código producto</label>
        <input type="text" class="form-control" id="num_cod_prod_id" name="num_cod_pro">
    </div>    

    <div class="form-group" > 
        <label for="full_name_id" class="control-label">Cantidad</label>
        <input type="text" class="form-control" id="cantidad_id" name="cantidad">
    </div>  

    <div class="form-group">
        <label for="descuento:id" class="control-label">Descuento</label>
        <input type="text" class="form-control" id="descuento_id" name="descuento">
    </div>    

    <div class="form-group"> 
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Valor unidad</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
            </tbody>
          </table>
    </div>                    
                                                    
                              
    <div class="form-group" style="margin-left: auto; margin-right: auto;
    width: max-content;"> 
<button type="submit" class="btn btn-primary" style="padding-left: 5rem;padding-right: 5rem;">Registrar</button>
</div>     
</form>
@endsection