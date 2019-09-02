@extends('layouts.app')
@section('title', $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description)

@section('content')
        <main role="main">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">{{ $page->title }}</h1>
                    <p class="lead sub-title">{{ $page->excerpt }}</p>
                </div>

                {!! $page->body !!}
            </div>
        </main>
@endsection