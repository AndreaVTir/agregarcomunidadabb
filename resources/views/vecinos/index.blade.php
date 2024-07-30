<!DOCTYPE html>
<html>
<head>
    <title>Vecinos</title>
</head>
<body>
    <h1>Lista de Vecinos</h1>
    <a href="{{ route('vecinos.create') }}">Añadir Vecino</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Escalera</th>
                <th>Piso</th>
                <th>Puerta</th>
                <th>Comunidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vecinos as $vecino)
                <tr>
                    <td>{{ $vecino->Nombre }}</td>
                    <td>{{ $vecino->Escalera }}</td>
                    <td>{{ $vecino->Piso }}</td>
                    <td>{{ $vecino->Puerta }}</td>
                    <td>{{ $vecino->comunidad->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('vecinos.edit', $vecino) }}">Editar</a>
                        <form action="{{ route('vecinos.destroy', $vecino) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>