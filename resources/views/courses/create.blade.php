@extends('layouts.admin')

@section('content')

<div class="pb-8">
        @if ($errors->any())
                
                <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                
                ERROS
                
                @foreach ($errors->all() as $error)
                        <li>
                                {{ __ ($error)}}
                        </li>
                        @endforeach
                </ul>

        @endif
</div>

        <p>INSERIR cursos</p>
        <form class="row" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="course_code" id="course_code" class="form-control" required/>
                                <label class="form-label" for="course_code">Course code</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control" required/>
                                <label class="form-label" for="name">Nome</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="total_ects" id="total_ects" class="form-control" required/>
                                <label class="form-label" for="total_ects">total ects</label>
                        </div>
                <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Submeter</button>
                </div>
        </form>
@endsection