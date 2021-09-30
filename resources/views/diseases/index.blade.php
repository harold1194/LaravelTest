@extends('layouts.admin')

@section('content')
<div class="container">
    
    <h1>Diseases</h1>
    @if(count($diseases) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Diseases</th>
                    <th scope="col">Infected</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($diseases as $disease)
                    <tr>
                        <th scope="row">{{$disease->id}}</th>
                        <td>{{$disease->diseasename}}</td>
                        <td>{{$disease->infected}}</td>
                        <td>
                            <a href="{{route('diseases.show', $disease->id)}} " class="btn btn-info">show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
        {{ $diseases->links('pagination::bootstrap-4') }}
    @else
        <p>No post found</p>
    @endif
    <a href="/diseases/create" class="btn btn-primary">Add Diseases</a>
</div>

@endsection