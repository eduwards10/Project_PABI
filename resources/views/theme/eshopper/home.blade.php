@extends('theme.eshopper.layout')
@section('content')
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Tiket yang Dijual</h2>
    @foreach($tiket as $value)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="#" alt="" />
                    <h2>{{$value->harga_tiket}}</h2>
                    <p>{{$value->nama_tiket}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{$value->harga_tiket}}</h2>
                        <p>{{$value->nama_tiket}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!--features_items-->
@endsection