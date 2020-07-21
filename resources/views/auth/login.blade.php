@extends('layouts.other_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <!-- Default form register -->
<form class="text-center border border-light p-5" action="/login_control" method="post">
    @csrf
    <p class="h4 mb-4">Sign In</p>
  <!-- Email Address-->
  <div class="form-group" style="display: flex; flex-direction: row;">
    <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-envelope"></i></button>
    <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="border-radius: 0px;">
    @error('email')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
</div>
    <!-- Password --> 
    <div class="form-group" style="display: flex; flex-direction: row;">
        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-key"></i></button>
        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" style="border-radius: 0px;">
    {{-- <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted">
        At least 8 characters and 1 digit
    </small> --}}
    </div>
    
    <div class="form-group row">
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <!-- Sign up button -->
    <button class="btn btn-success my-4 btn-sm" type="submit">Sign in</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
  </form>
  <!-- Default form register -->
        </div>
    </div>
</div>
@endsection

  