@extends('layouts.master')


@section('content')

	<h2 class="title">Login</h2>

	<form method="POST" action="{{ route('login') }}" class="columns is-centered">
		<div class="column is-half">
			@csrf

			{{-- EMAIL --}}
			<div class="field">
				<p class="control">
					<input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="email" placeholder="email" value="{{ old('email') }}">
				</p>
				@if ($errors->has('email'))
					<p class="help is-danger">{{ $errors->first('email') }}</p>
				@endif
			</div>

			{{-- PASSWORD --}}
			<div class="field">
				<p class="control">
					<input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" placeholder="password">
				</p>
				@if ($errors->has('password'))
					<p class="help is-danger">{{ $errors->first('password') }}</p>
				@endif
			</div>

			{{-- SUBMIT BUTTON --}}
			<div class="field">
				<p class="control">
					<button class="button is-warning">
						login
					</button>
				</p>
			</div>

		</div>
	</form>

@endsection
