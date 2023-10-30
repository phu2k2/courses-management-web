@extends('instructor.layouts.app')
@section('title', 'Create New Topic')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toast.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/instructor/course.css') }}">
@endsection.
@section('script')
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/toast.js') }}"></script>
    <script src="{{ asset('assets/js/instructor/change.image.js') }}"></script>
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add New Lesson</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('instructor.home') }}">Home</a></li>
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Lessons</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="">

                <div class="card">
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="" method="POST">
                            @csrf
                            <div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label fw-bold">Title <span
                                            class="text-alizarin fst-italic">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label fw-bold">Time duration <span
                                            class="text-alizarin fst-italic">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Trailer Upload <span
                                            class="text-alizarin fst-italic">*</span></label>
                                    <div class="col-sm-10 row change-img">
                                        <div class="col-sm-6 video-change">
                                            <img class="mb-3 change-video"
                                                src="{{ asset('assets/img/icons/show-change-image.jpg') }}" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="file" name="trailer_url" id="trailer" class="form-control"
                                                onchange="readURL(this);" accept="video/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="offset-sm-10 col-sm-2">
                                        <a id="uploadS3" class="btn btn-success">UPLOAD</a>
                                        <button id="btnFinish" type="submit" class="btn btn-primary"
                                            disabled>FINISH</button>
                                    </div>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
