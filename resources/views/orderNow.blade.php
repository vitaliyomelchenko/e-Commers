@extends('master')
 
@section('content')
<div class="container order">
    <div class="col-sm-3">
        <table class="table">
            <h5>Payment Details</h5>
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{ number_format($totalPrice,2) }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ {{number_format(0, 2)}}</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ {{number_format(10, 2)}}</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ number_format($totalPrice + 10, 2) }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="{{route('orderPlays')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <textarea class="form-control" name="address" id="email" placeholder="Enter your address"></textarea>
                </div>
                <h6>Payment Method:</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" value="Online" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Online
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" value="Cash">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Cash
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection