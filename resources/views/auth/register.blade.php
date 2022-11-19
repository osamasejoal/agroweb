@extends('auth.layouts.master')

@section('auth-content')
    <h4 class="text-center mb-4">Sign up your account</h4>

    {{-- Form --}}
    <form action="{{route('register.post')}}" method="POST">
        @csrf

        {{-- Name --}}
        <div class="form-group">
            <label class="mb-1"><strong>Name</strong></label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('name')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">

            @error('email')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group">
            <label class="mb-1"><strong>Password</strong></label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">

            @error('password')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="form-group">
            <label class="mb-1"><strong>Confirm Password</strong></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        {{-- Sign Up Button --}}
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
        </div>
    </form>

    {{-- Sign In Link --}}
    <div class="new-account mt-3">
        <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
    </div>

@endsection
