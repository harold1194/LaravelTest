@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Update Patient</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{form::label('name', 'Name')}}
    {{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
    {{form::label('lastname', 'Lastname')}}
    {{form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
    {{form::label('middlename', 'Middlename')}}
    {{form::text('middlename', '', ['class' => 'form-control', 'placeholder' => 'Middle Name'])}}
    {{form::label('sex', 'Sex')}}
    {{form::text('sex', '', ['class' => 'form-control', 'placeholder' => 'Sex'])}}
</div>
<hr>
{{form::hidden('_method', 'PUT')}}
{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>

@endsection