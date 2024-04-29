@extends('layout')

@section('content')
<div class="row d-flex align-itme-center justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 mt-4">
            <p class="title ml-2">All User</p>
            <a class="ml-2" href="{{ route('addUser') }}"> ADD User </a>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Hobbies</th>
                        </tr>
                    </thead>
                    @foreach($userData as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->first_name ." ". $value->last_name }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone_no }}</td>
                        <td>{{ $value->hobbies }}</td>
                    </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

@endsection