@extends('layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh">
        <form action="/storeLogin" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                @error('email')
                <p class="text-xs mb-2.5"> {{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputPassword">Wachtwoord</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Wachtwoord">
            </div>
            <input type="submit" class="btn btn-primary" name="login" value="Login">
        </form>
    </div>
@endsection
