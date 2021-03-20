@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        @foreach ($products as $value)
        <div class="col-sm-8 cart-list-devider">
            <div class="trading-wrapper">
                    <div class="search-item ">
                        <a href="detail/{{ $value->id }}">
                        <img class="searched-item" src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}"></a>
                        <p>
                            <h6>{{$value->name}}</h6>
                        </p>
                        <p>{{ $value->description }}</p>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
            <div class="trading-wrapper">
                    <div class="cart-list">
                        <a href="{{route('removeCart', $value->cart_id)}}">
                            <button class="btn btn-warning">Remove</button>
                        </a>
                    </div>
            </div>
        </div>
        
        @endforeach
</div>


    
</div>
@endsection