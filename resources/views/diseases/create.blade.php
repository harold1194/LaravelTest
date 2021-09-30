@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Disease</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\DiseasesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{form::label('disease', 'Disease')}}
        {{form::text('diseasename', '', ['class' => 'form-control', 'placeholder' => 'Disease'])}}
        {{form::label('infected', 'Infected')}}
        {{form::text('infected', '', ['class' => 'form-control', 'placeholder' => 'Infected'])}}
    </div>
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection