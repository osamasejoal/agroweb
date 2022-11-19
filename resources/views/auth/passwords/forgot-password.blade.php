@extends('auth.layouts.master')

@section('auth-content')
    <h4 class="text-center mb-4">Forgot Password!</h4>

    {{-- Form --}}
    <form action="{{ route('forgot.password') }}" method="POST">
        @csrf

        {{-- Email --}}
        <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}">

            @error('email')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- OTP Sending Button --}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Send OTP</button>
        </div>
    </form>

    {{-- Sign Up Link --}}
    <div class="new-account mt-3">
        <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
    </div>
@endsection