@extends('layouts.app')

@section('content')
		<main role="main">
			<div class="container">
				<div class="main-heading">
					<h1 class="title">Gallery</h1>
					<p class="lead sub-title">{{ setting('site.gallery_intro_text') }}</p>
				</div>

				<div class="row">
					@foreach($galleries as $gallery)
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
						@php
							$img = '.'.pathinfo('storage/'.$gallery->image, PATHINFO_EXTENSION);
					        $imgName = str_replace($img,'', $gallery->image);
					        $img = $imgName.'-cropped'.$img;
						@endphp
						<a href="{{ Voyager::image($gallery->image) }}" data-lightbox="gallery" data-title="{{ $gallery->title }}"><img src="{{ Voyager::image($img) }}" alt="" class="img-fluid"></a>
					</div>
					@endforeach
				</div>
			</div>
		</main>
@endsection