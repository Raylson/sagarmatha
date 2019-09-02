@extends('layouts.app')

@section('content')
        <main role="main">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">Products</h1>
                    <p class="lead sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
                <div class="row justify-content-center">
                    @foreach($products as $product)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-12 product-thumb">
                        <a href="/product/{{ $product->slug }}">
                            <div class="img-holder">
                                @php
                                    $img = '.'.pathinfo('storage/'.$product->product_image, PATHINFO_EXTENSION);
                                    $imgName = str_replace($img,'', $product->product_image);
                                    $img = $imgName.'-cropped'.$img;
                                @endphp
                                <img src="{{ Voyager::image($img) }}" alt="" class="img-fluid">
                            </div>
                            <span class="title">{{ $product->title }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
@endsection