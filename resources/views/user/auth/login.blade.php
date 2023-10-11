@extends('user.layouts.app')
@section('title', 'Login account')
@section('content')
    <!-- REGISTER
                    ================================================== -->
    <section class="">
        <div class="flickity-button-outset-long flickity-page-dots-white flickity-page-dots-43">
            <div class="w-100">
                <div class="py-10 overlay overlay-custom-left" style="background-image: url(assets/img/covers/cover-16.jpg)">
                    <div class="container">
                        <div class="row align-items-center py-md-5 gx-0">
                            <div class="container py-9">
                                <div class="row gx-0">
                                    <div class="col-md-8 col-xl-4 py-5 px-5 mx-auto bg-white accordion-body rounded-3">
                                        <!-- Login -->
                                        <h3 class="mb-6 text-center">Log In to Your Skola Account!</h3>
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <!-- Form Login -->
                                        <form class="mb-5" action="{{ route('login.auth') }}" method="POST">
                                            @csrf
                                            <!-- Email -->
                                            <div class="form-group mb-5">
                                                <label for="modalSigninEmail1">
                                                    Email
                                                </label>
                                                <input type="email" name="email" class="form-control" id="modalSigninEmail1"
                                                    placeholder="johndoe@creativelayers.com" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group mb-5">
                                                <label for="modalSigninPassword1">
                                                    Password
                                                </label>
                                                <input type="password" name="password" class="form-control" id="modalSigninPassword1"
                                                    placeholder="**********" value="{{ old('password') }}">
                                                @error('password')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="d-flex align-items-center mb-5 font-size-sm">
                                                <div class="form-check">
                                                    <input class="form-check-input text-gray-800" type="checkbox"
                                                        id="autoSizingCheck1">
                                                    <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class="ms-auto">
                                                    <a class="text-gray-800" href="">Forgot Password</a>
                                                </div>
                                            </div>

                                            <!-- Submit -->
                                            <button class="btn btn-block btn-primary" type="submit">
                                                LOGIN
                                            </button>
                                        </form>

                                        <!-- Text -->
                                        <p class="mb-0 font-size-sm text-center">
                                            Don't have an account? <a class="text-underline fw-semi-bold"
                                                href="{{ route('register.show') }}">Sign up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
