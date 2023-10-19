@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')
    <section class="">
        <div class="flickity-button-outset-long flickity-page-dots-white flickity-page-dots-43">
            <div class="w-100">
                <div class="py-10 overlay overlay-custom-left" style="background-image: url(/assets/img/covers/cover-16.jpg)">
                    <div class="container">
                        <div class="row align-items-center py-md-5 gx-0">
                            <div class="container py-9">
                                <div class="row gx-0">
                                    <div class="col-md-8 col-xl-4 py-5 px-5 mx-auto bg-white accordion-body rounded-3">
                                        <!-- Success Notification -->
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <!-- Login -->
                                        <h3 class="mb-6 text-center">{{ __('forgot_title') }}</h3>
                                        <!-- Form Login -->
                                        <form class="mb-5" action="{{ route('password.email') }}" method="POST">
                                            @csrf
                                            <!-- Email -->
                                            <div class="form-group mb-5">
                                                <label for="modalSigninEmail1">
                                                    {{ __('email') }}
                                                </label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="johndoe@creativelayers.com" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Submit -->
                                            <button class="btn btn-block btn-primary" type="submit">
                                                {{ strtoupper(__('send_link_reset')) }}
                                            </button>
                                        </form>
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
