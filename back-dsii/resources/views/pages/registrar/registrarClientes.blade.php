@extends ('layouts.app')

@section('content')

<div class="card" style="width: 40rem; margin:auto">
    <form method="POST" style="margin:3rem">
            <h1> <br> REGISTRAR CLIENTE</h1>
                <div class="form-group"> 
                    <label for="full_name_id" class="control-label">Nombre completo</label>
                    <input type="text" class="form-control" id="full_name_id" name="full_name">
                </div>    
            
                <div class="form-group"> 
                    <label for="street1_id" class="control-label">Dirección</label>
                    <input type="text" class="form-control" id="street1_id" name="street1">
                </div>                    
                                        
                <div class="form-group">
                    <label for="telefono_id" class="control-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono_id" name="telefono">
                </div>    
            
                <div class="form-group">
                    <label for="documento_id" class="control-label">Documento</label>
                    <input type="text" class="form-control" id="documento_id" name="documento">
                </div>     

                <div class="form-group">
                    <label for="documento_id" class="control-label">Tipo documento</label>
                    <input type="text" class="form-control" id="tipo_documento_id" name="tipo_documento">
                </div>                                    
                        
                <div class="form-group">
                    <label for="documento_id" class="control-label">Descuento</label>
                    <input type="text" class="form-control" id="descuento_id" name="descuento">
                </div>                                    
                        
                                        
                <div class="form-group"> 
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>  
        </form>
    /div> 
  @endsection