<?php #page specific processing



 ?>
@extends('layouts/admin')

@section('title', 'Page Title')


@section('container')

    {!! Form::model($data, ['route'=>['memberships.update', $data->id],"class"=>"form-horizontal", 'files'=>true, 'method'=>'PUT']) !!}
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
        @include('__partials/updateForm')
    {!!Form::close()!!}
@endsection