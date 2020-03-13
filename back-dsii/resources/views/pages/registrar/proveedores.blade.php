@extends ('layouts.app')

@section('content')

<div style="">
    <div class="card" style="width: 40rem; margin:auto">
        <form method="POST" style="margin:3rem">
            <h1> <br> REGISTRAR PROVEEDOR</h1>
                <div class="form-group"> 
                    
                    <label for="full_name_id" class="control-label">Nombre proveedor</label>
                    <input type="text" class="form-control" id="nombre_proveedor_id" name="nombre_proveedor">
                </div>    
            
                <div class="form-group"> 
                    <label for="street1_id" class="control-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion_id" name="direccion">
                </div>                    
                                        
                <div class="form-group">
                    <label for="telefono_id" class="control-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono_id" name="telefono">
                </div>         
                                       
                                         
                <div class="form-group" style="margin-left: auto; margin-right: auto;
                width: max-content;"> 
                  <button type="submit" class="btn btn-primary" style="padding-left: 5rem;padding-right: 5rem;">Registrar</button>
                </div>   
        </form>
    </div> 
  @endsection