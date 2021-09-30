@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="/patients" class="btn btn-default">Go Back</a>
        <h3>Name</h3>
        <p>{{$patient->name}}</p>
        <h3>Last Name</h3>
        <p>{{$patient->lastname}}</p>
        <h3>Middle Name</h3>
        <p>{{$patient->middlename}}</p>
        <h3>Sex</h3>
        <p>{{$patient->sex}}</p>
        <hr>
        <small>Written on {{$patient->created_at}}</small>
        <hr>
        <a href="/patients/{{$patient->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action' => ['App\Http\Controllers\PatientsController@destroy', $patient->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
    
@endsection