@extends('layout')

@section('content')
<div class="row d-flex align-itme-center justify-content-center">
    <div class="col-lg-7">
        @if(session('success'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('success') }}
        </div>
        @endif
        <div class="card border-0 mt-4">
            <p class="title ml-2">Add User</p>
            <a class="ml-2" href="{{ route('listUser') }}"> List User </a>
            <div class="card-body">
                <form method="post" action="{{ route('addAction') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" placeholder="Enter First Name">
                        @error('first_name')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" placeholder="Enter Last Name">
                        @error('first_name')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        @error('gender')
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
                        <label for="dob">Date of birth</label>
                        <input type="date" class="form-control form-control-sm" id="dob" name="dob">
                        @error('dob')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
						<label for="phone_no">Phone No</label>
						<input type="phone_no" class="form-control form-control-sm" id="phone_no" name="phone_no" placeholder="Enter phone_no">
						@error('phone_no')
                        <p class="error">{{ $message }}</p>
                        @enderror
					</div>
                    <div class="form-group">
                        <label for="hobbies">Hobbies</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Dancing"  name="hobbies[]" value="dancing">
                            <label class="form-check-label" for="Dancing">Dancing</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cooking"  name="hobbies[]" value="cooking">
                            <label class="form-check-label" for="cooking">Cooking</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="reading" name="hobbies[]" value="reading">
                            <label class="form-check-label" for="reading">Reading</label>
                        </div>
                        @error('hobbies')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input type="file" class="form-control form-control-sm" id="images" name="images" multiple>
                        @error('images')
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