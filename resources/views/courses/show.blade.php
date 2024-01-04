@extends('layouts.admin')

@section('content')
        <p>Cursos</p>
        <form class="row" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="course_code" id="course_code" value="{{ $courses->name }}" class="form-control" readonly/>
                                <label class="form-label" for="course_code">course_code</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control" readonly/>
                                <label class="form-label" for="name">name</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="total_ects" id="total_ects" value="{{ $courses->total_ects }}" class="form-control" readonly/>
                                <label class="form-label" for="total_ects">total ects</label>
                        </div>
                </div>
        </form>
@endsection