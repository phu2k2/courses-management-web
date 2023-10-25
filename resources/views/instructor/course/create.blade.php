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
                    <h5 class="card-title">Add new course</h5>

                    <!-- General Form Elements -->
                    <form method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label fw-bold">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="textIntroduction" class="col-sm-2 col-form-label fw-bold">Introduction</label>
                            <div class="col-sm-10">
                                <textarea cols="4" id="introduction" name="introduction" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="selectCategory" class="col-sm-2 col-form-label fw-bold">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Poster Upload</label>
                            <div class="col-sm-10 row change-img">
                                <div class="col-sm-6">
                                    <img class="mb-3 img-change" src="{{ asset('assets/img/icons/show-change-image.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        Upload your course image here. It must meet our course image quality standards to be accepted.
                                        <p class="text-alizarin fst-italic">
                                            Important guidelines: .jpg, .jpeg,. gif, or .png. no text on the image.
                                        </span>
                                    </div>
                                    <input type="file" name="poster_url" id="image" class="form-control" onchange="readURL(this);" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Trailer Upload</label>
                            <div class="col-sm-10 row change-img">
                                <div class="col-sm-6 video-change">
                                    <img class="mb-3 change-video" src="{{ asset('assets/img/icons/show-change-image.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        Your promo video is a quick and compelling way for students to preview what they’ll learn in your course.
                                        Students considering your course are more likely to enroll if your promo video is well-made.
                                        <p class="text-alizarin fst-italic">
                                            Learn how to make your promo video awesome!
                                        </span>
                                    </div>
                                    <input type="file" name="trailer_url" id="trailer" class="form-control" onchange="readURL(this);" accept="video/*">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="textIntroduction" class="col-sm-2 col-form-label fw-bold">Description</label>
                            <div class="col-sm-10">
                                <textarea cols="4" id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="textIntroduction" class="col-sm-2 col-form-label fw-bold">Learns Description</label>
                            <div class="col-sm-10">
                                <textarea cols="4" id="learns" name="learns_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="textIntroduction" class="col-sm-2 col-form-label fw-bold">Requirements</label>
                            <div class="col-sm-10">
                                <textarea cols="4" id="requirements" name="requirements_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0 fw-bold">Language</legend>
                            <div class="col-sm-10 row">
                                <div class="col-sm-2 form-check">
                                    <input class="form-check-input" type="radio" name="languages" id="english_lang"
                                        value="1">
                                    <label class="form-check-label" for="english_lang">
                                        {{ __('english_lang') }}
                                    </label>
                                </div>
                                <div class="col-sm-2 form-check">
                                    <input class="form-check-input" type="radio" name="languages" id="vietnamese_lang"
                                        value="2">
                                    <label class="form-check-label" for="vietnamese_lang">
                                        {{ __('vietnamese_lang') }}
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0 fw-bold">Level</legend>
                            <div class="col-sm-10 row">
                                <div class="col-sm-2 form-check">
                                    <input class="form-check-input" type="radio" name="level" id="english_lang"
                                        value="1">
                                    <label class="form-check-label" for="english_lang">
                                        {{ __('beginner_level') }}
                                    </label>
                                </div>
                                <div class="col-sm-2 form-check">
                                    <input class="form-check-input" type="radio" name="level" id="vietnamese_lang"
                                        value="2">
                                    <label class="form-check-label" for="vietnamese_lang">
                                        {{ __('intermediate_level') }}
                                    </label>
                                </div>
                                <div class="col-sm-2 form-check">
                                    <input class="form-check-input" type="radio" name="level" id="vietnamese_lang"
                                        value="3">
                                    <label class="form-check-label" for="vietnamese_lang">
                                        {{ __('advanced_level') }}
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Price</label>
                            <div class="col-sm-4">
                                <input type="number" step="0.01" name="price" class="form-control">
                            </div>
                            <label for="inputNumber" class="col-sm-2 col-form-label fw-bold">Discount</label>
                            <div class="col-sm-4">
                                <input type="number" min="0" max="100" step="1" name="discount" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
