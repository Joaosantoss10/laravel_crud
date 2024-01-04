@extends('layouts.admin')
  
@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Adicionar</a>
    <div class="mt-3"></div>
    <table id="student_table" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Email</th>
                <th>Nº CC</th>
                <th>Nº Contribuinte</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->student_code }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->citizen_card_number }}</td>
                    <td>{{ $student->tax_identification_number }}</td>
                    <td>
                        <a style="float:left;margin-right:5px;" href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                        <a style="float:left;;margin-right:5px;"href="{{ route('students.show', $student->id) }}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Ver</a>
                        <form style="float:left;;margin-right:5px;" action="{{ route('students.destroy', $student->id) }}" method="POST">
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
            $('#student_table').DataTable();
        });
    </script>

@endsection