@extends('layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh">
        <form action="/login/auth" method="POST">
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Wachtwoord</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Wachtwoord">
            </div>
            <input type="submit" class="btn btn-primary" name="login" value="Login">
            <a href="{{ url('/adminlogin') }}">admin login</a>
        </form>
    </div>
@endsection
