@extends('frontend.layouts.master')

@section('main')
    
    @include('frontend.layouts._hero')

    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class="row">
                <br>
                <p class="text-center">dfdf</p>
                <hr>

                <div class="card">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                                <div><img src="" alt="" class="card-img-top"></div>
                            </article>
                        </aside>

                        <aside class="col-sm-7">
                            <article class="card-body p-5">
                                <h3 class="title mb-3"></h3>
                                <p class="price-detail-wrap">
                                    <span class="price h3 text-warning">
                                        <span class="currency"></span>
                                        <span class="num"></span>
                                    </span>
                                </p>
                                <dl class="item-property">
                                    <dt></dt>
                                    <dd>
                                        <p></p>
                                    </dd>
                                    <hr>
                                    <a href="" class="btn btn-lg btn-outline-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i>Add to cart
                                    </a>
                                </dl>
                            </article>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
