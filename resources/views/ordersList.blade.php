@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-8 cart-list-devider">
            <div class="trading-wrapper">
            <h6>My Orders:</h6>
                @foreach ($products as $index=>$value)
                    <div class="row">
                        <div class="col-sm-1 order">
                         <p>{{ $index + 1 }}</p>
                        </div>
                        <div class="col-sm-10 order">
                            <div class="search-item ">
                                <a href="detail/{{ $value->id }}">
                                <img class="searched-item " src="{{asset('/img/')."/".$value->gallery}}" class="d-block w-100" alt="{{$value->name}}">
                                <h6>{{$value->name}}</h6></a>
                                <small>Payment method: {{$value->payment_method}}</small><br>
                                <small>Delivery address: {{$value->address}}</small><br>
                                <small>Owner: {{$user_name}}</small><br>
                                <small>Payment Status: {{$value->payment_status}}</small><br>
                                <small>Price: {{number_format($value->price, 2)}}</i></small>
                                <hr width="300px">
                            </div>
                        </div>
                    </div>
                @endforeach
          </div>
        </div>
        
</div>
</div>
@endsection