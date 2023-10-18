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
                        @if (session()->has('message'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Success!</strong> {{ session()->get('message') }}</span>
                            </div>
                        @endif
                        <div class="card rounded-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Profile Information</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('users.update') }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputUsername">Username</label>
                                                <input type="text" class="form-control" id="inputUsername"
                                                    placeholder="Username" name="username"
                                                    value="{{ old('username', $user->username) }}">
                                                @error('username')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUsername">Description</label>
                                                <textarea rows="2" class="form-control" id="inputBio" name="description">
                                                        {{ old('description', $user->profile?->description) }}
                                                </textarea>
                                                @error('description')
                                                    <span class="text-alizarin fst-italic">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img alt="Andrew Jones" id="imageDisplay"
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                    class="rounded-circle img-responsive mt-2" width="128"
                                                    height="128">
                                                <div class="mt-2">
                                                    <input class="w-75" id="imageInput" type="file" name="image"
                                                        accept="image/png, image/gif, image/jpeg" />
                                                    <span class="btn btn-sm btn-primary uploadImage">
                                                        Save image
                                                    </span>
                                                </div>
                                                <small>Choose image and click save</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">First name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                placeholder="First name" name="first_name"
                                                value="{{ old('first_name', $user->profile?->first_name) }}">
                                            @error('first_name')
                                                <span class="text-alizarin fst-italic">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName">Last name</label>
                                            <input type="text" class="form-control" id="inputLastName"
                                                placeholder="Last name" name="last_name"
                                                value="{{ old('last_name', $user->profile?->last_name) }}">
                                            @error('last_name')
                                                <span class="text-alizarin fst-italic">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                            name="email" value="{{ old('email', $user->email) }}" disabled>
                                        @error('email')
                                            <span class="text-alizarin fst-italic">{{ $message }}</span>
                                        @enderror
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
    <script>
        const imageInput = document.getElementById("imageInput");
        const imageDisplay = document.getElementById("imageDisplay");
        const uploadImage = document.querySelector('.uploadImage');
        //display image when user choose file done
        imageInput.addEventListener("change", function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imageDataURL = e.target.result;
                    imageDisplay.src = imageDataURL;
                };

                reader.readAsDataURL(file);
            } else {
                imageDisplay.src = "";
            }
        });

        //click save image
        uploadImage.addEventListener('click', async () => {
            const selectedFile = imageInput.files[0];

            if (selectedFile) {
                try {
                    const responseUrlUpload = await axios.get("{{ route('users.getUploadUrl') }}");
                    const url = responseUrlUpload.data.url;

                    //save image to minio server
                    await axios.put(url, selectedFile, {
                        headers: {
                            'Content-Type': 'image/jpeg',
                        },
                    });

                    //save path image to database
                    await axios.put("{{ route('users.updateImage') }}");
                    alert('Image save successfully');
                } catch (error) {
                    alert('Error uploading image');
                }
            } else {
                alert('You have not selected a file')
            }
        });
    </script>

@endsection
