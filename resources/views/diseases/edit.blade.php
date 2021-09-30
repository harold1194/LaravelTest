@extends('layouts.admin')

@section('content')
<h1>Update Disease</h1>
{!! Form::open(['action' => ['App\Http\Controllers\DiseasesController@update', $disease->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{form::label('disease', 'Disease')}}
    {{form::text('diseasename', '', ['class' => 'form-control', 'placeholder' => 'Disease'])}}
    {{form::label('infected', 'Infected')}}
    {{form::text('infected', '', ['class' => 'form-control', 'placeholder' => 'Infected'])}}
</div>
{{form::hidden('_method', 'PUT')}}
{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection