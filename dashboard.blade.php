@extends('layouts.app')
{{--<?php var_dump($projekte);?>--}}
{{-- $projekte['p1']['projectname']}}
@foreach($projekte as $projects)
    <div></div> --}}
@section('projects')
    {{-- das projects ist eine art ID auf die sich die @yield funktion in app.blade bezieht --}}
    @foreach($projekte as $project)
    <div class="col-md-2">
        @include('projectdetails', array('project'=>$project))
    </div>
    @endforeach
    {{--<h2>Ich bin da - Dashboard</h2>--}}
@endsection
