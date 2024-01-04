@extends('layouts.admin')
  
@section('content')
    <a href="{{ route('courses.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Adicionar</a>
    <div class="mt-3"></div>
    <table id="courses_table" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>total_ects</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->total_ects }}</td>
                    <td>
                        <a style="float:left;margin-right:5px;" href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                        <a style="float:left;;margin-right:5px;"href="{{ route('courses.show', $course->id) }}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Ver</a>
                        <form style="float:left;;margin-right:5px;" action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#course_table').DataTable();
        });
    </script>

@endsection