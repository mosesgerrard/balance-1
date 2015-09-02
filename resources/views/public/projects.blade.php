@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
    @include('inc/featured')
@endsection

@section('container')

    <h1>projects</h1>
@endsection