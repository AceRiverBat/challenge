@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-12 col-lg-5">
            <img src="{{$article -> image}}" class="card-img-top" alt="3" width="125rem">
        </div>
        <div class="col-md-2 col-12 col-lg-2"></div>

        <div class="col-md-5 col-12 col-lg-5">
            <div class="card p-4 h-75">
                <h3>{{$article -> nom}}</h3>
                <p class="h-50 d-flex align-items-center">{{$article -> description}}</p>
            </div>
            
        </div>
    </div>
</div>

@endsection