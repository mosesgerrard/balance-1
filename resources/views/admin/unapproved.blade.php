@extends('layouts/admin')

           @section('title', 'Page Title')

           @section('container')
               <div class="col-xs-5 col-sm-8 col-md-12 heading-members">
                       <h1 class="pull-center"><b>Un-approved members</b></h1>
               </div>
               <div class="content-inner">
                   @include('__partials/data/approvedmembers')
                   {!! $data->render() !!}
               </div>
           @endsection