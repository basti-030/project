@extends('layouts.app')
@section('projects')

    <form method="post" action="/edit">
        @csrf
        <input type="text" name="vorname" value="{{$status['data'][0]->Vorname}}">
        <input type="text" name="nachname" value="{{$status['data'][0]->Nachname}}">
        <input type="hidden" value="{{$status['data'][0]->worker_ID}}" name="worker_ID">
        <input type="submit" name="submit">
    </form>
@endsection
