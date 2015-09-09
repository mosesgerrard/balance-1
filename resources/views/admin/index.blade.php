@extends('layouts/admin')

           @section('title', 'Page Title')

           @section('container')
               <div class="col-xs-5 col-sm-8 col-md-12 heading-members">
                       <h1 class="pull-center"><b>All Members</b></h1>
               </div>
               <div class="content-inner">
                   @include('__partials/data/allmemebers')
                   {!! $data->render() !!}
               </div>
           @endsection