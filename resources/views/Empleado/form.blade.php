     <h1>{{ $modo }} empleado </h1>
     
     @if(count($errors)>0)


           <div class="alert alert-danger" role="alert">
             <ul>
                    @foreach( $errors->all() as $error)
                     <li>  {{ $error }} </li>
                    @endforeach

             </ul>

           </div>

     @endif

     <div class="form-group">


     <br> 
     <div class="form-group">  
     <label for="Nombre"> NOMBRE </label>
     <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre" >
    </div>


     <div class="form-group">
     <label for="ApellidoPaterno">  APELLIDO PATERNO </label>
     <input type="text" class="form-control"  name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno" >
     <br>
     </div>
    

     <div class="form-group">
     <label for="ApellidoMaterno"> APELLIDO MATERNO </label>
     <input type="text"class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno" >
     </div>

     
     
     <div class="form-group">
     <label for="Correo"> CORREO </label>
     <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo" >
     </div>

     
     <div class="form-group">
     <label for="Foto"> </label>
     @if(isset($empleado->Foto))
 
    <img class="img-thumbmail img-fluid"  src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="50">
      @endif
     <input type="file" class="form-control" name="Foto" value=""  id="Foto" >
     </div>
     


     <input class="btn btn-success" type="submit" value="{{ $modo }} datos" >

     <a class="btn btn-primary"  href="{{ url('empleado/') }}"> REGRESAR </a>

     <br>