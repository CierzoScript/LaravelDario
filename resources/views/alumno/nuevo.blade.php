@extends ("alumno.layout")

@section("opciones")
    <a  href="{{route('alumnos.index')}}">Cancelar</a>
@endsection

@section("contenido")
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id=""><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id=""><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id=""><br>
        <label for="dni">DNI</label>
        <input type="text" name="dni" id=""><br>
        <button type="submit">Guardar</button>
    </form>


@endsection
