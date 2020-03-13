@extends ('layouts.app')

@section('content')


<div style="">
    <div class="card" style="width: 40rem; margin:auto">
        
    <form method="POST"   style="margin:3rem">
        <h1> <br> REGISTRAR PRODUCTO</h1>
        <div class="form-group"> 
            
            <label for="full_name_id" class="control-label">Nombre producto</label>
            <input type="text" class="form-control" id="nombre_producto_id" name="nombre_producto">
        </div>    
    
        <div class="form-group"> 
            <label for="street1_id" class="control-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion_id" name="descripcion">
        </div>                    
                                
        <div class="form-group">
            <label for="telefono_id" class="control-label">Precio compra</label>
            <input type="number" class="form-control" id="precio_compra_id" name="precio_compra">
        </div>    
    
        <div class="form-group">
            <label for="documento_id" class="control-label">Precio venta</label>
            <input type="number" class="form-control" id="precio_venta_id" name="precio_venta">
        </div>     

        <div class="form-group">
            <label for="documento_id" class="control-label">Cantidad en stock</label>
            <input type="number" class="form-control" id="cantidad_id" name="cantidad">
        </div>                                    
                
        <div class="form-group">
            <label for="documento_id" class="control-label">Id proveedor</label>
            <input type="text" class="form-control" id="provedor_id" name="proveedor">
        </div>                                    
        
        <div class="form-group">
            <label for="documento_id" class="control-label">Estado</label>
            <input type="text" class="form-control" id="estado_id" name="estado">
        </div>                                    

                                
        <div class="form-group" style="margin-left: auto; margin-right: auto;
                    width: max-content;"> 
        <button type="submit" class="btn btn-primary" style="padding-left: 5rem;padding-right: 5rem;">Registrar</button>
    </div>   
    </form>
</div>  
</form>
@endsection
