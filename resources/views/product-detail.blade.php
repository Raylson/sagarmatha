@extends('layouts.app')
@section('title', $product->title)

@section('content')
        <main role="main">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">{{ $product->title }}</h1>
                    <p class="lead sub-title">{{ $product->intro_title }}</p>
                </div>

                <p>{{ $product->short_desc }}</p>
                <h5>{{ $product->subtitle_1 }}</h5>
                {!! $product->description_1 !!}
                <h5>{{ $product->subtitle_2 }}</h5>
                {!! $product->description_2 !!}
            </div>
        </main>
@endsection