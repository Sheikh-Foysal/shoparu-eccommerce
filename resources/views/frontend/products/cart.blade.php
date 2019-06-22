@extends('frontend.layouts.master')

@section('main')
    
    <div class="container">
        <br>
        <p class="text-center">Cart</p>
        <hr>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if (empty($cart))
            <div class="alert alert-info">Please add some products in your cart</div>
        @else
            <table class="table table-borderd ">
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td>Unit Price</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($cart as $key => $product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product['title'] }}</td>
                            <td><input type="number" name="quantity" value="{{ $product['quantity'] }}"></td>
                            <td>BDT {{ number_format($product['unit_price'],2) }}</td>
                            <td>BDT {{ number_format( $product['total_price'],2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $key }}">
                                    <button type="submit" class="btn btn-lg btn-sm btn-outline-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total = {{ number_format($total,2) }}</td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
            <a href="{{ route('cart.clear') }}" class="btn btn-danger">Cart Clear</a>    
        @endif
    </div>

@stop
