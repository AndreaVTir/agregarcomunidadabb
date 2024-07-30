<!DOCTYPE html>
<html>
<head>
    <title>Editar Vecino</title>
</head>
<body>
    <h1>Editar Vecino</h1>
    <form action="{{ route('vecinos.update', $vecino) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre" value="{{ $vecino->Nombre }}" required>
        <br>
        <label for="Escalera">Escalera:</label>
        <input type="text" name="Escalera" id="Escalera" value="{{ $vecino->Escalera }}" required>
        <br>
        <label for="Piso">Piso:</label>
        <input type="text" name="Piso" id="Piso" value="{{ $vecino->Piso }}" required>
        <br>
        <label for="Puerta">Puerta:</label>
        <input type="text" name="Puerta" id="Puerta" value="{{ $vecino->Puerta }}" required>
        <br>
        <label for="id_comunidad">Comunidad:</label>
        <select name="id_comunidad" id="id_comunidad" required>
            @foreach($comunidades as $comunidad)
                <option value="{{ $comunidad->id_comunidad }}" {{ $comunidad->id_comunidad == $vecino->id_comunidad ? 'selected' : '' }}>
                    {{ $comunidad->name }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>