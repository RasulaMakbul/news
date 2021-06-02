@extends('master')
@section('sidebar')
    @parent
    <p>This is about sidebar</p>
@endsection

@section('component')
<h1>About Us Page</h1>
@php
    $name='Emran';
    echo $name;
@endphp

@endsection