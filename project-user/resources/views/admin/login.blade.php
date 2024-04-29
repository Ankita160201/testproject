@extends('layout')

@section('content')
<div class="row d-flex align-itme-center justify-content-center">
    <div class="col-lg-7">
        @if(Session::has('danger'))
        <div class="alert alert-danger mt-2">
            {{ Session::get('danger') }}
        </div>
        @endif
       
        <div class="card border-0 mt-4">
            <p class="title ml-2">Login</p>
            <div class="card-body">
                <form method="post" action="{{ route('loginAction') }}" enctype="multipart/form-data">
                    @csrf
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