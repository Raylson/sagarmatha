@extends('layouts.app')

@section('content')
		<main role="main">
			<div class="container">
				<div class="main-heading">
					<h1 class="title">Contact Us</h1>
					<p class="lead sub-title">{{ setting('site.contactus_intro_text') }}</p>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						@if(session('success_message'))
							<div class="alert alert-success">
								{{ session('success_message') }}
							</div>
						@endif

						@if(session('error_message'))
							<div class="alert alert-warning">
								{{ session('error_message') }}
							</div>
						@endif
						<form method="POST" action="/submit_contact">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="full_name">Full Name</label>
								<input type="text" name="full_name" class="form-control" id="full_name" required="required" value="{{ old('full_name') }}">
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" name="email" class="form-control" id="email" required="required" value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<label for="phone">Phone Number</label>
								<input type="text" class="form-control" name="phone" id="phone" required="" value="{{ old('phone') }}">
							</div>
							<div class="form-group">
								<label for="message">Your Message</label>
								<textarea class="form-control" name="message" id="message" rows="5">{{ old('message') }}</textarea>
							</div>
							<input type="text" name="email_code" value="" style="display: none;">
							<button type="submit" class="btn btn-primary">Send Message</button>
							<button type="reset" class="btn btn-danger ml-2">Start Over</button>
						</form>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						{!! setting('site.google_map') !!}
					</div>
				</div>
			</div>
		</main>
@endsection