<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $page }} - Sistem Manajemen Anggota Ikatan Pranata Hukum Indonesia</title>
	<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body>
	<div class="layer"></div>
	<main class="page-center">
	<article class="sign-up">
		<h1 class="sign-up__title">Welcome back!</h1>
		@if(session()->has('messageError'))
			<div class="bg-red-100 border border-red-400 text-red-700 mb-2 p-1 rounded relative" role="alert">
				<p class="">{{ session('messageError') }}</p>
			</div>
		@endif
		<p class="sign-up__subtitle">Sign in to your account to continue</p>
		<form class="sign-up-form form" action="{{ route('login') }}" method="post">
			{{ csrf_field() }}
			<label class="form-label-wrapper">
				<p class="form-label">Email</p>
				<input class="form-input" type="text" name="email" placeholder="Enter your email" required>
			</label>
			<label class="form-label-wrapper">
				<p class="form-label">Password</p>
				<input class="form-input" type="password" name="password" placeholder="Enter your password" required>
			</label>
			<a class="link-info forget-link" href="##">Forgot your password?</a>
			<label class="form-checkbox-wrapper">
				<input class="form-checkbox" type="checkbox" required>
				<span class="form-checkbox-label">Remember me next time</span>
			</label>
			<button class="form-btn primary-default-btn transparent-btn">Sign in</button>
		</form>
	</article>
	</main>
</body>
</html>