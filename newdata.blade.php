@extends('layouts.app')
@section('projects')

    <form method="post" action="/new">
        @csrf
        <input type="text" name="vorname" value="{{$status['data'][0]->Vorname}}">
        <input type="text" name="nachname" value="{{$status['data'][0]->Nachname}}">
        <input type="submit" name="submit">
    </form>
