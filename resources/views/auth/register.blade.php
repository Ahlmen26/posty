@extends('layouts.app');

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-2 rounded-lg bg-white p-4">
            <h4>REGISTER</h4>
            <hr>
            <form action="{{ route('register') }}" method="post" class="form needs-validation" novalidate>
                @csrf
                <div class="row">
                    {{-- Name --}}
                    <div class="col-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="form form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="col-12 mt-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form form-control @error('email') is-invalid @enderror" placeholder="Your email" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Username --}}
                    <div class="col-12 mt-1">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form form-control @error('username') is-invalid @enderror " placeholder="Username" value="{{ old('username') }}">
                        
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="col-12 mt-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form form-control @error('password') is-invalid @enderror" placeholder="Choose a password">
                    
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                     {{-- Confirm Password --}}
                     <div class="col-12 mt-1">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form form-control @error('password_confirmation') is-invalid @enderror" placeholder="Repeat your password">
                    
                        @error('password_confirmation')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div>
                    <button type="submit" class="btn btn-success">Register</button>
                </div>

            </form>
        </div>
    </div>

    {{-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
    </script> --}}
@endsection