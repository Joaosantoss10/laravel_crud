@extends('layouts.admin')

@section('content')
        <p>Alunos</p>
        <form class="row" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control" readonly/>
                                <label class="form-label" for="name">Nome</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="student_code" id="name" value="{{ $student->student_code }}" class="form-control" readonly/>
                                <label class="form-label" for="name">Código</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" value="{{ $student->email }}" class="form-control" readonly/>
                                <label class="form-label" for="email">Email</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="number" name="citizen_card_number" id="citizen_card_number" value="{{ $student->citizen_card_number }}" class="form-control" readonly/>
                                <label class="form-label" for="citizen_card_number">Nº CC</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="number" name="tax_identification_number" id="tax_identification_number" value="{{ $student->tax_identification_number }}" class="form-control" readonly/>
                                <label class="form-label" for="tax_identification_number">Nº Contribuinte</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="address1" id="address1" class="form-control" value="{{ $student->address1 }}" readonly/>
                                <label class="form-label" for="address1">Morada 1</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="address2" id="address2" class="form-control" value="{{ $student->address2 }}" readonly/>
                                <label class="form-label" for="address2">Morada 2</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ $student->postal_code }}" readonly/>
                                <label class="form-label" for="postal_code">Código Postal</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="locality" id="locality" class="form-control" value="{{ $student->locality }}" readonly/>
                                <label class="form-label" for="locality">Localidade</label>
                        </div>
                </div>
        </form>
@endsection