@extends('layouts.master')


@section('content')

	<h2 class="title">Register</h2>

	<form method="POST" action="{{ route('register') }}" class="columns is-centered">
		<div class="column is-half">
			@csrf

			{{-- NAME --}}
			<div class="field">
				<p class="control">
					<input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" type="text" placeholder="name" value="{{ old('name') }}">
				</p>
				@if ($errors->has('name'))
					<p class="help is-danger">{{ $errors->first('name') }}</p>
				@endif
			</div>

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

			{{-- PASSWORD CONFIRM --}}
			<div class="field">
				<p class="control">
					<input class="input" name="password_confirmation" type="password" placeholder="confirm password">
				</p>
			</div>

			{{-- SUBMIT BUTTON --}}
			<div class="field">
				<p class="control">
					<button class="button is-warning">
						register
					</button>
				</p>
			</div>

		</div>
	</form>

@endsection
