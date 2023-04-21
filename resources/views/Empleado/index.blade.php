
@extends('layouts.app')
@section('content')
<div class="container">

     
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert" >

{{Session::get('mensaje')}}

@endif

<button type="button" class="close" data-dismiss= "alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>


<a href="{{ url('empleado/create') }}" class="btn btn-success" > REGISTRAR NUEVO EMPLEADO </a>
</br>
</br>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Correo</th>

            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td> {{ $empleado->id}}   </td>
            <td> 
            <img class="img-thumbmail img-fluid"  src="{{asset('storage').'/'.$empleado->Foto }}"  width= "50" alt="50">   
            
             
        </td>


            <td>  {{ $empleado->Nombre}}  </td>
            <td>  {{ $empleado->ApellidoPaterno}}   </td> 
            <td> {{ $empleado->ApellidoMaterno}}   </td>
            <td>  {{ $empleado->Correo}}  </td>
            <td>
        <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">

            
                
            Editar | 

        </a>
            <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline"  method="post">

             @csrf

             {{ method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick=" return confirm('¿Quieres borrar?')"
            value="Borrar">

            </form>

            </td>
        
            </tr>    

        @endforeach    
    
    </tbody>
</table>
</div>
@endsection