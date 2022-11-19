@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
                <form action="/register" method="post"> 
                    @csrf
                    <div class="form-floating">
                        <input 
                        type="text" 
                        name="name"
                        class="form-control rounded-top" 
                        id="name" 
                        placeholder="Your Name" 
                        />
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input 
                        type="text" 
                        name="username"
                        class="form-control" 
                        id="username" 
                        placeholder="Input Username" 
                        />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input 
                        type="text" 
                        name="email"
                        class="form-control" 
                        id="email" 
                        placeholder="youremail@example.com" 
                        />
                        <label for="email">Email Adress</label>
                    </div>
                    <div class="form-floating">
                        <input 
                        type="text" 
                        name="password"
                        class="form-control rounded-bottom" 
                        id="password" 
                        placeholder="Passwoord" 
                        />
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                        Register
                    </button>
                </form>
                <small class="d-block text-center mt-3 text-muted">Have An Account? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection
