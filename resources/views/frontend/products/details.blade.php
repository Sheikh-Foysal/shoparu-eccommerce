@extends('frontend.layouts.master')

@section('main')
    

    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class="row">
                <br>
                <h2 class="text-center">{{ $product->title }}</h2>
                <hr>

                <div class="card">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                                <div><img src="{{ $product->getFirstMediaUrl('products') }}" alt="{{ $product->title }}" class="card-img-top"></div>
                            </article>
                        </aside>

                        <aside class="col-sm-7">
                            <article class="card-body p-5">
                                <h3 class="title mb-3"></h3>
                                <p class="price-detail-wrap">
                                    <span class="price h3 text-warning">
                                        <span class="currency">BDT</span>
                                        <span class="num">
                                            @if ($product->sale_price == null && $product->sale_price > 0)
                                                <strike>BDT {{ $product->price }}</strike> BDT {{ $product->sale_price }}
                                            @else
                                                BDT {{ $product->price }}
                                            @endif
                                        </span>
                                    </span>
                                </p>
                                <dl class="item-property">
                                    <dt>Description</dt>
                                    <dd>
                                        <p>{{ $product->description }}</p>
                                    </dd>
                                    <hr>
                                    
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </form>
                                </dl>
                            </article>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
