@extends ('layouts.app')

@section('content')
    <div>
        <div class="d-flex p-4">I'm a flexbox container!</div>
        <form >
            
            <div class="form-group"> <!-- Full Name -->
                <div>
                    <label for="Title" class="control-label">REGISTRAR CLIENTES</label>
                </div>
                <label for="full_name_id" class="control-label">Nombre completo</label>
                <input type="text" class="form-control" id="full_name_id" name="full_name">
            </div>    
        
            <div class="form-group"> <!-- Street 1 -->
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
                                    
            <div class="form-group"> <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>     
            
        </form>
    </div>
  @endsection