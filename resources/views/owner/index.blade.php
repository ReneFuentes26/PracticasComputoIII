Listado de mascotas

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->full_name }}</th>
            <td>{{ $owner->age }}</td>
            <td>{{ $owner->email }}</td>
            <td>
                <form method="POST" action="{{ url('/owner/'. $owner->id) }}">
                @csrf
                <a href="{{ url('/owner/'. $owner->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbodyt
</table>