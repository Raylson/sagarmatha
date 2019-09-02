@extends('layouts.app')

@section('content')
        <div class="glide home-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    @foreach($sliders as $slider)
                    <li class="glide__slide" style="background-image: url({{ Voyager::image($slider->image) }}">
                        <div class="container">
                            <div class="row justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-end justify-content-center">
                                <article class="col-xl-4 col-lg-5 col-md-7 col-sm-9 col-9 caption">
                                    <h2>{{ $slider->title }}</h2>
                                    <p>{{ $slider->description }}</p>
                                </article>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="img-holder mb-xl-0 mb-lg-0 mb-md-5 mb-5"><img class="img-fluid" src="{{ Voyager::image(setting('site.home_middle_image')) }}" alt=""></div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12">
                        <div class="section-title">
                            <h1>{{ setting('site.home_middle_title') }}</h1>
                            <p class="lead">{{ setting('site.home_middle_sub_title') }}</p>
                        </div>
                        <p>{{ setting('site.home_middle_description') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-12 col-12">
                        <div class="glide testimony-slider">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    @foreach($testimonials as $testimonial)
                                    <li class="glide__slide">
                                        <p>{{ $testimonial->description }}</p>
                                        <p class="title"><strong>{{ $testimonial->full_name }}</strong></p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection