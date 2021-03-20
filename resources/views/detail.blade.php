@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{asset('/img/').'/'.$gallery}}" alt="">
        </div>
        <div style="margin-top: 100px;" class="col-sm-6">
            <h2>{{$name}}</h2>
            <h3>Price: {{$price}} грн</h3>
            <h4>Category: {{$category}}</h4>
            <h5>Description: {{$description}}</h5>
            <form action="{{ route('addToCart') }}" method="POST">
                @csrf
                    <input type="hidden" name="product_id" value="{{ $id }}">
                <div style="margin-top: 50px;">
                    <button class="btn btn-primary" type="submit">Add to Cart</button>
                </div>
            </form>
            <div style="margin-top: 10px;">
                <button class="btn btn-light" type="submit">Buy Now</button>
            </div>
            <div style="margin-top: 10px;">
                <button class="btn btn-light" type="submit"><a href="/">Go Back</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
