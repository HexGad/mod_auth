@extends('auth::layouts.master')
@section('title', 'Forget Password')
@section('content')
    <form class="form w-100" novalidate="novalidate" action="{{url('/dashboard/password/email')}}" method="post">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        @if(session()->has('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <!--begin::Input group=-->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <!--end::Email-->
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" class="btn btn-primary me-4">
                <!--begin::Indicator label-->
                <span class="indicator-label">Submit</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
            <a href="{{url('/dashboard/login')}}" class="btn btn-light">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
@endsection
