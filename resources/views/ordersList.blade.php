@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-8 cart-list-devider">
            <div class="trading-wrapper">
            <h6 class="order">My Orders</h6>
                @foreach ($products as $index=>$value)
                    <div class="row">
                        <div class="col-sm-1">
                         <p>{{ $index + 1 }}</p>
                        </div>
                        <div class="col-sm-10">
                            <div class="search-item ">
                                <a href="detail/{{ $value->id }}">
                                <img class="searched-item" src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}">
                                <h6>{{$value->name}}</h6>
                                </a>
                                <p>{{ $value->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
          </div>
        </div>
        
</div>
</div>
@endsection