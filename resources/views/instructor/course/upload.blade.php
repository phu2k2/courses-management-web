@extends('instructor.layouts.app')
@section('title', 'Create New Course')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/instructor/course.css') }}">
@endsection
@section('script')
    <script type="module" src="{{ asset('assets/js/instructor/create.course.js') }}"></script>
    <script src="{{ asset('assets/js/instructor/change.image.js') }}"></script>
@endsection
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('instructor.home') }}">Home</a></li>
                <li class="breadcrumb-item">Management</li>
                <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="">

            <div class="card">
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form action="" method="POST" id="stepTwo">
                        @csrf
                        <div>
                            <h5 class="card-title">Step 2: Upload Poster and Trailer</h5>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Poster Upload <span class="text-alizarin fst-italic">*</span></label>
                                <div class="col-sm-10 row change-img">
                                    <div class="col-sm-6">
                                        <img class="mb-3 img-change" src="{{ asset('assets/img/icons/show-change-image.jpg') }}" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            Upload your course image here. It must meet our course image quality standards to be accepted.
                                            <p class="fw-bold text-primary-support">
                                                Important guidelines: .jpg, .jpeg,. gif, or .png. no text on the image.
                                            </span>
                                        </div>
                                        <input type="file" name="poster_url" id="image" class="form-control" onchange="readURL(this);" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Trailer Upload <span class="text-alizarin fst-italic">*</span></label>
                                <div class="col-sm-10 row change-img">
                                    <div class="col-sm-6 video-change">
                                        <img class="mb-3 change-video" src="{{ asset('assets/img/icons/show-change-image.jpg') }}" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            Your promo video is a quick and compelling way for students to preview what they’ll learn in your course.
                                            Students considering your course are more likely to enroll if your promo video is well-made.
                                            <p class="fw-bold text-primary-support">
                                                Learn how to make your promo video awesome!
                                            </span>
                                        </div>
                                        <input type="file" name="trailer_url" id="trailer" class="form-control" onchange="readURL(this);" accept="video/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="offset-sm-10 col-sm-2">
                                    <a id="uploadS3" class="btn btn-success">UPLOAD</a>
                                    <button id="btnFinish" type="submit" class="btn btn-primary" disabled>FINISH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
