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
        <p>INSERIR ALUNOS</p>
        <form class="row" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control" required/>
                                <label class="form-label" for="name">Nome</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="student_code" id="name" class="form-control" required/>
                                <label class="form-label" for="name">Código</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control" required/>
                                <label class="form-label" for="email">Email</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="number" name="citizen_card_number" id="citizen_card_number" class="form-control" required/>
                                <label class="form-label" for="citizen_card_number">Nº CC</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="number" name="tax_identification_number" id="tax_identification_number" class="form-control" required/>
                                <label class="form-label" for="tax_identification_number">Nº Contribuinte</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="address1" id="address1" class="form-control" required/>
                                <label class="form-label" for="address1">Morada 1</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="address2" id="address2" class="form-control" />
                                <label class="form-label" for="address2">Morada 2</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="postal_code" id="postal_code" class="form-control" required/>
                                <label class="form-label" for="postal_code">Código Postal</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-outline mb-4">
                                <input type="text" name="locality" id="locality" class="form-control" required/>
                                <label class="form-label" for="locality">Localidade</label>
                        </div>
                </div>
                <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Submeter</button>
                </div>
        </form>
@endsection