@extends('layout.navbar')

@section('content')
    <div class="container">
        <div style="text-align:center" class="row">
        <form action="{{route('update', $user)}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                    </div>
                </div>
                <label for="id">
                    <p>ID</p>
                    <input name="id" class="form-control" type="text" value="{{$user->id}}" disabled>
                </label>
                <br>
                <label for="name">
                    <p>Name</p>
                    <input name="name" class="form-control" type="text" value="{{$user->name}}">
                </label>
                <br>
                <label for="email">
                    <p>Email</p>
                    <input name="email" class="form-control" type="email" value="{{$user->email}}">
                </label>
                <br>
                <label for="password">
                    <p>Password</p>
                    <input name="password" class="form-control" type="text" value="{{$user->password}}">
                </label>
            </div> 
            <br>
            <input class="btn btn-success" type="submit">
        </form>
        </div>
    </div>
@endsection