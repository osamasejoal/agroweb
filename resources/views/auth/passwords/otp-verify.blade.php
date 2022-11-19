@extends('auth.layouts.master')

@section('auth-content')
    <h4 class="text-center mb-4">Sign in your account</h4>

    {{-- Form --}}
    <form action="{{ route('verify.pin') }}" method="POST">
        @csrf

        {{-- OTP --}}
        <div class="form-group">
            <label class="mb-1"><strong>Write the OTP Number</strong></label>
            <input type="text" name="otp" id="otp" class="form-control @error('otp') is-invalid @enderror">

            @error('otp')
                <span class="invalid-feedback" role="alert" style="font-size:15px">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- OTP Checking Button --}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>

@endsection