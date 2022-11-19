@extends('auth.layouts.master')

@section('auth-content')
    <h4 class="text-center mb-4">Set Your New Password!</h4>

    {{-- Form --}}
    <form action="{{ route('reset.password') }}" method="POST">
        @csrf

        {{-- Email --}}
        {{-- <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}">

            @error('email')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div> --}}
        
        {{-- New Password --}}
        <div class="form-group">
            <label class="mb-1"><strong>New Password</strong></label>
            <input type="password" name="password" id="password"
                class="form-control @error('password') is-invalid @enderror">

            @error('password')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>
        
        {{-- Confirm Password --}}
        <div class="form-group">
            <label class="mb-1"><strong>Confirm Password</strong></label>
            <input type="password" name="password" id="password"
                class="form-control">
        </div>

        {{-- Reset Password Button --}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>

@endsection