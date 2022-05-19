@extends('layouts.template')

@section('content')

@if (Auth::user())
        <h3>Bonjour {{Auth::user()->name}}</h3>
    @endif
    
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 reduce" src="https://medias.toutelanutrition.com/blog/2020/08/banner-fruits.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 reduce" src="http://c.files.bbci.co.uk/8E59/production/_122514463_fr.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 reduce" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Ffr%2Fphotos%2Ffruit&psig=AOvVaw3AlRGkiZhbu408J8CPwr6N&ust=1653039888201000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCICYuc2j6_cCFQAAAAAdAAAAABAq" alt="Third slide">
    </div>
  </div>
</div>

<div class="container">
    
    <div class="d-flex justify-content-evenly">
        <div class="row d-flex justify-content-center">
            @foreach ($articles as $article)
            <div class="col-md-3 col-12 col-lg-3 m-2 d-flex justify-content-center">
                <div class="card">
                    <a href="{{ url('/article' , $article->id) }}"><img src="{{$article -> image}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="card-title">{{$article -> nom}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection