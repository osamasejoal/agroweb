@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            
            {{-- Success alert --}}
            <div class="row d-flex justify-content-center">
                @if (session('success'))
                    <div id="success-alert" class="alert alert-success text-center position-absolute d-block col-9" style="margin-top:-23px">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>&nbsp;/
                    <li class="breadcrumb-item"><a href="#">Add Users</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">

                    {{-- Create Account Form --}}
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Create Account</p>
                        </div>
                        <div class="card-body col-xl-12 col-lg-12 col-sm-12 m-auto">

                            <div class="basic-form row">

                                    {{-- Form --}}
                                    <form action="{{ route('user.store') }}" method="post" id="account" class="row m-auto d-flex justify-content-around col-8" enctype="multipart/form-data">
                                        @csrf

                                        {{-- Account type --}}
                                        <div class="mb-5 row">
                                            <label for="role" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Account For<span class="text-danger" style="font-size:20px">*</span>
                                            </label>
                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <select name="role" id="role" class="form-control" style="font-size:18px">
                                                    <option value="" class="text-center">-- Select Account Type --</option>
                                                    <option value="2" {{ old('role')==2?'selected':'' }}>
                                                        Editor
                                                    </option>
                                                    <option value="3" {{ old('role')==3?'selected':'' }}>
                                                        Customer
                                                    </option>
                                                </select>

                                                @error('role')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Name --}}
                                        <div class="mb-5 row">

                                            <label for="name" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Name<span class="text-danger" style="font-size:20px">*</span>
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="name" type="text" value="{{ old('name') }}"
                                                    id="name" class="form-control" style="font-size:18px">

                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Email --}}
                                        <div class="mb-5 row">

                                            <label for="email" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Email<span class="text-danger" style="font-size:20px">*</span>
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="email" type="text" value="{{ old('email') }}"
                                                    id="email" class="form-control" style="font-size:18px">

                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="mb-3 row col-12">
                                            <div class="col-sm-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </div>


                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
