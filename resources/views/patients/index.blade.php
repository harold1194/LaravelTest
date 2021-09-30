@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Patients</h1>
        @if(count($patients) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <th scope="row">{{$patient->id}}</th>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->lastname}}</td>
                            <td>{{$patient->middlename}}</td>
                            <td>{{$patient->sex}}</td>
                            <td>
                                <a href="{{route('patients.show', $patient->id)}} " class="btn btn-info">show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
            {{ $patients->links('pagination::bootstrap-4') }}
        @else
        <p>No post found</p>
        @endif
        <a href="/patients/create" class="btn btn-primary">Add Patient</a>
    </div>
    
@endsection