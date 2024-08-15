@extends('layout.header')
@section('title','dashboard')
@section('content')
@auth
    <div class="container">
        <div class="row">
            <div class="btn btn-success mt-5 container container-fluid">{{auth()->user()->name}} is logged in</div>
        </div>
    </div>
    
    
    @endauth
    
@endsection