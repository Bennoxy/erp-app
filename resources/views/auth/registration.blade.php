@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="wrapper">
    
    <!--start content-->
    <main class="authentication-content">
     <div class="container-fluid">
       <div class="authentication-card">
         <div class="card shadow rounded-0 overflow-hidden">
           <div class="row g-0">
             <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
               <img src="{{asset('public')}}/assets/images/error/login-img.jpg" class="img-fluid" alt="">
             </div>
             <div class="col-lg-6">
               <div class="card-body p-4 p-sm-5">
                 <h5 class="card-title mb-5">ERP User Registration</h5>
                 <!-- <p class="card-text mb-5">See your growth and get consulting support!</p> -->
                 @if (Session::has('success'))
                   <div class="alert alert-success">{{ Session::get('success') }}</div>
                 @endif
                 @if (Session::has('fail'))
                   <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                 @endif
                
                 <form class="form-body" method="post" action="{{ route('register') }}">
                    @csrf
                 {{-- <form class="form-body" method="post" action="{{ route('login') }}"> --}}
                   @csrf 
                   <!-- <div class="d-grid">
                     <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
                         <img class="me-2" src="{{asset('public')}}/assets/images/icons/search.svg" width="16" alt="">
                         <span>Sign in with Google</span>
                       </span>
                     </a>
                   </div>
                   <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                     <hr>
                   </div> -->
                     <div class="row g-3">
                       <div class="col-12">
                         <label for="name" class="form-label">Name</label>
                         <div class="ms-auto position-relative">
                           <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill"></i></div>
                            <input id="name" type="text" class="form-control radius-30 ps-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </div>
                       </div>
                       <div class="col-12">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                            <input id="email" type="email" class="form-control radius-30 ps-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="role" class="form-label">Role</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill-gear"></i></div>
                            <select id="role" name="role" class="form-select radius-30 ps-5" @error('role') is-invalid @enderror>
                                <option>- Select User Role -</option>
                                <option value="1">Admin</option>
                                <option value="2">Human Resource</option>
                                <option value="3">Accountant</option>
                                <option value="4">Quantity Surveyor</option>
                                <option value="5">Project Controller</option>
                                <option value="6">Expeditor</option>
                                <option value="7">Staff</option>
                                <option value="8">Technical</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-12">
                         <label for="password" class="form-label">Password</label>
                         <div class="ms-auto position-relative">
                           <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                           <input id="password" type="password" class="form-control radius-30 ps-5 @error('password') is-invalid @enderror" name="password" autocomplete="password">
                           @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                          </div>                        
                      </div>
                       <!-- <div class="col-6">
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                           <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                         </div>
                       </div>
                       <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                       </div> -->
                       <div class="col-12">
                         <div class="d-grid">
                           <button type="submit" class="btn btn-primary radius-30">Register</button>
                         </div>
                       </div>
                       <!-- <div class="col-12">
                         <p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a></p>
                       </div> -->
                     </div>                    
                    
                 </form>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
    </main>
     
    <!--end page main-->

</div>
<!--end wrapper-->
@endsection