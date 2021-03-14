@extends ("alumno.layout")

@section("opciones")
    <a  href="{{route('alumnos.index')}}">Cancelar</a>
@endsection

@section("contenido")
    <form action="{{route('alumnos.update', $alumno)}}" method="POST">
        @csrf

        @method("PUT")
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$alumno->nombre}}"><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{$alumno->direccion}}"><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{$alumno->telefono}}"><br>
        <label for="dni">DNI</label>
        <input type="text" name="dni" value="{{$alumno->dni}}"><br>
        <button type="submit">Guardar</button>
    </form>


@endsection
