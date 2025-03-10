{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Usuario</h1>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('frontend.layouts.master')
@section('content')

    <!-- SIGN IN START -->
    <section class="wsus__sign_in">

        <div class="row align-items-center">

            {{-- Imagen a la izquierda --}}
            <div class="col-xxl-5 col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="wsus__sign_img">
                    <img src="{{ asset('frontend/assets/images/login_img_1.jpg') }}" alt="login" class="img-fluid">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="EduCore" class="img-fluid">
                    </a>
                </div>
            </div>

            {{-- Formulario a la derecha --}}
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 m-auto wow fadeInRight">
                <div class="wsus__sign_form_area">

                    {{-- Seleccionar Tab Student o Instructor --}}
                    {{-- <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Student</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Instructor</button>
                        </li>
                    </ul> --}}

                    {{-- Forma de ingresar --}}
                    <div class="tab-content" id="pills-tabContent">

                        {{-- Formulario General --}}
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">

                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <h2>{{ __('Iniciar Sesión') }} <span>!</span></h2>
                                {{-- <p class="new_user">Nuevo Usuario ? <a href="sign_up.html">Crea tu cuenta</a></p> --}}
                                <p class="new_user">{{ __('Bienvenido de nuevo, favor de ingresar sus credenciales') }}</p>
                                
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>{{ __('Email') }}*</label>
                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>{{ __('Password') }}* <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></label>
                                            <input type="password" name="password" placeholder="{{ __('Password') }}" required>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>

                                            <button type="submit" class="common_btn">{{ __('Login') }}</button>

                                        </div>
                                    </div>

                                </div>
                            </form>

                            {{-- Ingresa con Redes Sociales --}}
                            {{-- <p class="or">or</p>
                            <ul class="social_login d-flex flex-wrap">
                                <li>
                                    <a href="#">
                                        <span><img src="images/google_icon.png" alt="Google" class="img-fluid"></span>
                                        Google
                                    </a>
                                </li>
                            </ul> --}}

                            <p class="create_account">{{ __('Do not have an account?') }}
                                <a href="{{ route('register') }}">{{ __('Create an account') }}</a>
                            </p>

                            {{-- Temporalmente --}}
                            {{-- <p class="create_account">
                                <a href="{{ route('admin.login') }}">Admin Login</a>
                            </p> --}}

                        </div>

                        {{-- Formulario Instructor --}}
                        {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <form action="#">
                                <h2>Log in<span>!</span></h2>
                                <p class="new_user">New User ? <a href="sign_up.html">Create an Account</a></p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Email or Username*</label>
                                            <input type="text" placeholder="Email or Username">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Email or Username* <a href="#">Forgot Password?</a></label>
                                            <input type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <button type="submit" class="common_btn">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="or">or</p>
                            <ul class="social_login d-flex flex-wrap">
                                <li>
                                    <a href="#">
                                        <span><img src="images/google_icon.png" alt="Google" class="img-fluid"></span>
                                        Google
                                    </a>
                                </li>
                            </ul>
                            <p class="create_account">Don't have an account? <a href="sign_up.html">Create free
                                    account</a></p>
                        </div> --}}

                    </div>

                </div>
            </div>

        </div>

        <a class="back_btn" href="{{ route('home') }}">{{ __('Return home') }}</a>

    </section>
    
@endsection
