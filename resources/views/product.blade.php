@extends('master')

@section('content')
<div class="container custom-product">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
                @foreach ($products as $value)
                    <div class="carousel-item {{$value->id == 1 ? 'active': ''}}">
                        <a href="detail/{{ $value->id }}">
                        <img class="slider-img" src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="trading-wrapper">
        <h6>Trading products</h6>
        @foreach ($products as $value)
            <div class="treding-item">
                <a href="detail/{{ $value->id }}">
                <img class="trending-image" src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}">
                <p>{{$value->name}}</p>
            </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
