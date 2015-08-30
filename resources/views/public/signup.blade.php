@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
@endsection

@section('container')

    {!! Form::open(['route'=>'memberships.store',"class"=>"form-horizontal", 'files'=>true]) !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('__partials.message')
        @include('__partials/registrationForm')
    {!!Form::close()!!}
@endsection