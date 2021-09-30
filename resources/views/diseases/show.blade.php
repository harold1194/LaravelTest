@extends('layouts.admin')

@section('content')
    <a href="/diseases" class="btn btn-primary">Go Back</a>
    <h3>Disease</h3>
    <p>{{$disease->diseasename}}</p>
    <h3>Infected</h3>
    <p>{{$disease->infected}}</p>
    <hr>
    <small>Written on {{$disease->created_at}}</small>
    <hr>
    <a href="/diseases/{{$disease->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['App\Http\Controllers\DiseasesController@destroy', $disease->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection