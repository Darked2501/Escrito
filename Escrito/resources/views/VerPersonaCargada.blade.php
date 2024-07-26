<!DOCTYPE html>
<html>
<head>
    <title>Listado de personas</title>
</head>
<body>
<div>
    <h1>Listado de personas</h1>
    @if ($personas->isEmpty())
        <p>No hay personas</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido }}</td>
                <td>{{ $persona->telefono }}</td>
                <td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
