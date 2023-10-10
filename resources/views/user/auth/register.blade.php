@extends('user.layouts.app')
@section('title', 'Register account')
@section('content')
    <!-- REGISTER
                ================================================== -->
    <section class="">
        <div class="flickity-button-outset-long flickity-page-dots-white flickity-page-dots-43">
            <div class="w-100">
                <div class="py-10 overlay overlay-custom-left" style="background-image: url(assets/img/covers/cover-16.jpg)">
                    <div class="container py-5">
                        <div class="row align-items-center py-md-5 gx-0">
                            <div class="container">
                                <div class="row gx-0">
                                    <div class="col-md-8 col-xl-4 py-5 px-5 mx-auto bg-white accordion-body rounded-3">
                                        <!-- Register -->
                                        <h3 class="mb-6 text-center">Sign Up and Start Learning!</h3>

                                        <!-- Form Register -->
                                        <form class="mb-5" method="POST" action="{{ route('register.store') }}">

                                            <!-- Username -->
                                            <div class="form-group mb-5">
                                                <label for="modalSignupUsername1">
                                                    Username
                                                </label>
                                                <input type="text" name="username" class="form-control"
                                                    id="modalSignupUsername1" placeholder="John"
                                                    value="{{ old('username') }}">
                                                @error('username')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group mb-5">
                                                <label for="modalSignupEmail1">
                                                    Email
                                                </label>
                                                <input type="email" name="email" class="form-control" id="modalSignupEmail1"
                                                    placeholder="johndoe@creativelayers.com" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group mb-5">
                                                <label for="modalSignupPassword3">
                                                    Password
                                                </label>
                                                <input type="password" name="password" class="form-control" id="modalSignupPassword3"
                                                    placeholder="**********" value="{{ old('password') }}">
                                                @error('password')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Submit -->
                                            <button class="btn btn-block btn-primary" type="submit">
                                                SIGN UP
                                            </button>

                                        </form>

                                        <!-- Text -->
                                        <p class="mb-0 font-size-sm text-center">
                                            Already have an account? <a class="text-underline fw-semi-bold"
                                                href="{{ route('login.show') }}">Log In</a>
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
