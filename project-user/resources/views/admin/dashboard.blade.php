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
			<p class="title ml-2">Dashboard</p>
			<div class="card-body">
				<h1>Hello Admin</h1>
                <a href="{{ route('addUser') }}"> ADD User </a>
			</div>
		</div>

	</div>
</div>

@endsection