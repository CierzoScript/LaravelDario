@extends ("alumno.layout")

@section("opciones")
    <a class="btn btn-danger" href="{{route('alumnos.create')}}">Insertar</a>
@endsection

@section("contenido")
    <table>
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->direccion}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>{{$alumno->dni}}</td>

                <td><a href="{{route("alumnos.edit", $alumno)}}">Editar</a></td>
                <td><form action="{{route("alumnos.destroy", $alumno)}}" method="POST">
                        @csrf
                        @method("DELETE");
                        <button >Borrar</button>
                    </form></td>
        @endforeach

    </table>
@endsection
