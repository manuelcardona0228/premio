<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>
    <table>
        <thead>
          <tr>
            <th>
                Nombres
            </th>
            <th>
                Apellidos
            </th>
            <th>
                Cédula
            </th>
            <th>
                Departamento
            </th>
            <th>
                Ciudad
            </th>
            <th>
                Celular
            </th>
            <th>
                Email
            </th>
            <th>
                Habeas Data
            </th>
            <th>
                Fecha Creación
            </th>
            <th>
                Fecha Actualización
            </th>
            <th>
                Ganador
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->departamento_id->nombre }}</td>
                <td>{{ $cliente->ciudad_id->nombre }}</td>
                <td>{{ $cliente->celular }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->habeas_data === 1 ? 'Acepto' : 'No acepto' }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->ganador === 1 ? 'Ganador' : 'Sin ganar' }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>
