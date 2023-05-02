Nuevo Registro de Propietario

<form action="{{ url('/owner') }}" method="POST">
    @csrf
    @include('owner.form')
   
</form>