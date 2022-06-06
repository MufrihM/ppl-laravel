@extends('dashboard.layout.login')

@section('container')
<main class="form-signin w-100 m-auto rounded-5">
    <form action="/register/post" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
            <label for="namaLengkap">Nama Lengkap</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="alamat" placeholder="Alamat">
            <label for="alamat">Alamat</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email address">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        <a href="/login">Have an account?</a>
        </div>
        <button class="w-100 btn btn-lg mt-3" style="background-color: lightgreen;" type="submit">Sign in</button>
    </form>
    </main>
@endsection