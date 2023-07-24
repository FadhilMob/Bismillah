@extends('layouts.app')

@section('title')
    | LOGIN
@endsection
@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-4 col-md-4 col-lg-6 col-xl-10">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">
            <p> <center>
                <img src="https://th.bing.com/th/id/R.26a4fbb5b11507db98408e71938be5f3?rik=ir2%2b4ZudtSgIPg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-Xix68xvfQMo%2fUOJAT1FJmHI%2fAAAAAAAAEro%2fExw177elxwE%2fs1600%2fLogo%2bKota%2bBatu.jpg&ehk=T5aEpiKTdCdhiYfVSwse9if3TmuqAvybLNIEV80usRU%3d&risl=&pid=ImgRaw&r=0" 
                                width="200" height="120"> 
                <h3>SMART PEKAN</h3>
                <h4>LOGIN</h4>
            <p> <center>
            <div class="col-lg-8 d-none d-lg-block">
                        <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row mb-50">
                                        <label for="username" class="col-md-10 col-form-label text-md-end">{{ __('NIP') }}</label>

                                        <div class="col-md-100">
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-50">
                                        <label for="password" class="col-md-10 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-100">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-12">
                                        <div class="col-md-60">
                                            <button type="submit" style="height: 40px;width: 220px;" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="login100-form-btn">Register</a>
                                        @endif -->
                                    </div>
                            </form>
            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection