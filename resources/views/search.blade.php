@extends('master')

@section('content')
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-2">
            <a href="#">Filter</a>
        </div>
    <div class="col-sm-10">
        <div class="trading-wrapper">
        <h6>Searched products</h6>
        @foreach ($products as $value)
            <div class="search-item">
                <a href="detail/{{ $value->id }}">
                <img class="searched-item" src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}">
                <h6>{{$value->name}}</h6>
                <p>{{ $value->description }}</p>
            </a>
            </div>
        @endforeach
    </div>
    </div>
    </div>
</div>
@endsection
