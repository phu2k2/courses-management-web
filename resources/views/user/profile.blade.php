@extends('layouts.app')

@section('title', 'Edit frofile')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/account.css') }}">
@endsection
@section('content')
    <div class="container py-4 bg-white-ice">
        <div class="row">
            @include('user.sidebar')
            <div class="col-md-7 col-xl-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card rounded-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Profile Information</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.update') }}">
                                    @csrf
                                    <div class="row">

                                        <input type="hidden" class="form-control" id="inputUsername" name="id"
                                            value="{{ $user->id }}">

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputUsername">Username</label>
                                                <input type="text" class="form-control" id="inputUsername"
                                                    placeholder="Username" name="username" value="{{ $user->username }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUsername">Description</label>
                                                <textarea rows="2" class="form-control" id="inputBio" name="description">
                                                    @if (!empty($user->profile))
{{ $user->profile->description }}
@else
Tell something about yourself
@endif
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img alt="Andrew Jones"
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                    class="rounded-circle img-responsive mt-2" width="128"
                                                    height="128">
                                                <div class="mt-2">
                                                    <span class="btn btn-primary"><i class="fa fa-upload"></i></span>
                                                </div>
                                                <small>For best results, use an image at least 128px by 128px in .jpg
                                                    format</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">First name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                placeholder="First name" name="first_name"
                                                value="{{ !empty($user->profile) ? $user->profile->first_name : '' }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName">Last name</label>
                                            <input type="text" class="form-control" id="inputLastName"
                                                placeholder="Last name" name="last_name"
                                                value="{{ !empty($user->profile) ? $user->profile->last_name : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                            name="email" value="{{ $user->email }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
