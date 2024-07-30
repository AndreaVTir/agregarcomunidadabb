<!DOCTYPE html>
<html>
<head>
    <title>Crear Vecino</title>
</head>
<body>
    <h1>Crear Nuevo Vecino</h1>
    <form action="{{ route('vecinos.store') }}" method="POST">
        @csrf
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre" required>
        <br>
        <label for="Escalera">Escalera:</label>
        <input type="text" name="Escalera" id="Escalera" required>
        <br>
        <label for="Piso">Piso:</label>
        <input type="text" name="Piso" id="Piso" required>
        <br>
        <label for="Puerta">Puerta:</label>
        <input type="text" name="Puerta" id="Puerta" required>
        <br>
        <label for="id_comunidad">Comunidad:</label>
        <select name="id_comunidad" id="id_comunidad" required>
            @foreach($comunidades as $comunidad)
                <option value="{{ $comunidad->id_comunidad }}">{{ $comunidad->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>