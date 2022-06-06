@extends('dashboard.layout.login')

@section('container')
    <main class="form-signin w-100 m-auto rounded-5">
    <form action="/login" method="post">
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        <a href="/register">Don't have an account?</a>
        </div>
        <button class="w-100 btn btn-lg mt-3" style="background-color: lightgreen;" type="submit">Sign in</button>
    </form>
    </main>
@endsection