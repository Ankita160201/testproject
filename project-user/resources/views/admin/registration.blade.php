@extends('layout')

@section('content')
<div class="row d-flex align-itme-center justify-content-center">
	<div class="col-lg-7">
		@if(session('status'))
		<div class="alert alert-success mb-1 mt-1">
			{{ session('status') }}
		</div>
		@endif
		<div class="card border-0 mt-4">
			<p class="title ml-2">Registration</p>
			<div class="card-body">
				<form method="post" action="{{ route('registrationAction') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name">
						@error('name')
                        <p class="error">{{ $message }}</p>
                        @enderror
					</div>
					<div class="form-group">
						<label for="username">User Name</label>
						<input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Enter User Name">
						@error('username')
                        <p class="error">{{ $message }}</p>
                        @enderror
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter Email">
						@error('email')
                        <p class="error">{{ $message }}</p>
                        @enderror
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
						@error('password')
                        <p class="error">{{ $message }}</p>
                        @enderror
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

@endsection