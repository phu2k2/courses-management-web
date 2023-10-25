@extends('instructor.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ __('courses_list') }}</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div>
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary d-inline-block m-2">
                            Add Course
                            <i class="bi bi-plus"></i>
                        </a>
                        <!-- Primary Color Bordered Table -->
                        <table class="table table-bordered border-primary" style="text-align : center">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Average Rating</th>
                                    <th scope="col">Total Students</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $course->id }}</th>
                                        <td style = "text-align: start ">{{ $course->title }}</td>
                                        <td>{{ $course->category->name }}</td>
                                        <td>{{ $course->price }} $</td>
                                        <td>{{ $course->average_rating }}</td>
                                        <td>{{ $course->total_students }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style=" width: 100%; text-align : center">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Primary Color Bordered Table -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
