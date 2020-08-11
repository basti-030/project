@extends('layouts.app')

@section('projects')
    @foreach($projekte as $project)
        <div  class="col-md-2">
            @include('projectdetails', array('project'=>$project))
        </div>
    @endforeach
@endsection
