<!doctype html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 12:13:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
        rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css" />

    <!-- Map -->
    <link href='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <link rel="stylesheet" href="assets/css/video.css">


    <title>Skola</title>

</head>

<body class="bg-dark">

    <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Close -->
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <!-- Heading -->
                    <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
                        Schedule a demo with us
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                        We can help you solve company communication.
                    </p>

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- First name -->
                                <div class="form-label-group">
                                    <input type="text" class="form-control form-control-flush"
                                        id="registrationFirstNameModal" placeholder="First name">
                                    <label for="registrationFirstNameModal">First name</label>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Last name -->
                                <div class="form-label-group">
                                    <input type="text" class="form-control form-control-flush"
                                        id="registrationLastNameModal" placeholder="Last name">
                                    <label for="registrationLastNameModal">Last name</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Email -->
                                <div class="form-label-group">
                                    <input type="email" class="form-control form-control-flush"
                                        id="registrationEmailModal" placeholder="Email">
                                    <label for="registrationEmailModal">Email</label>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Password -->
                                <div class="form-label-group">
                                    <input type="password" class="form-control form-control-flush"
                                        id="registrationPasswordModal" placeholder="Password">
                                    <label for="registrationPasswordModal">Password</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">

                                <!-- Submit -->
                                <button class="btn btn-block btn-primary mt-3 lift">
                                    Request a demo
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-sidebar left fade-left fade" id="accountModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Signin -->
                <div class="collapse show" id="collapseSignin" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Log In to Your Skola Account!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                                    fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                                    fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signin -->
                        <form class="mb-5">

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSigninEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSigninEmail"
                                    placeholder="creativelayers">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSigninPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSigninPassword"
                                    placeholder="**********">
                            </div>

                            <div class="d-flex align-items-center mb-5 font-size-sm">
                                <div class="form-check">
                                    <input class="form-check-input text-gray-800" type="checkbox"
                                        id="autoSizingCheck">
                                    <label class="form-check-label text-gray-800" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>

                                <div class="ms-auto">
                                    <a class="text-gray-800" data-bs-toggle="collapse" href="#collapseForgotPassword"
                                        role="button" aria-expanded="false"
                                        aria-controls="collapseForgotPassword">Forgot Password</a>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                LOGIN
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Don't have an account? <a class="text-underline" data-bs-toggle="collapse"
                                href="#collapseSignup" role="button" aria-expanded="false"
                                aria-controls="collapseSignup">Sign up</a>
                        </p>
                    </div>
                </div>

                <!-- Signup -->
                <div class="collapse" id="collapseSignup" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up and Start Learning!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                                    fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                                    fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signup -->
                        <form class="mb-5">

                            <!-- Username -->
                            <div class="form-group mb-5">
                                <label for="modalSignupUsername">
                                    Username
                                </label>
                                <input type="text" class="form-control" id="modalSignupUsername"
                                    placeholder="John">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSignupEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSignupEmail"
                                    placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSignupPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSignupPassword"
                                    placeholder="**********">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                SIGN UP
                            </button>

                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Already have an account? <a class="text-underline" data-bs-toggle="collapse"
                                href="#collapseSignin" role="button" aria-expanded="true"
                                aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>

                <!-- Forgot Password -->
                <div class="collapse" id="collapseForgotPassword" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Recover password!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                                    fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                                    fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Recover Password -->
                        <form class="mb-5">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="modalForgotpasswordEmail">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="modalForgotpasswordEmail"
                                    placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                RECOVER PASSWORD
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Remember your password? <a class="text-underline" data-bs-toggle="collapse"
                                href="#collapseSignin" role="button" aria-expanded="false"
                                aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sidebar cart -->
    <div class="modal modal-sidebar left fade-left fade" id="cartModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mb-4">
                    <h5 class="modal-title">Your Shopping Cart</h5>
                    <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                                fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                                fill="currentColor"></path>
                        </svg>

                    </button>
                </div>

                <div class="modal-body">
                    <ul class="list-group list-group-flush mb-5">
                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Basic of Nature</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z"
                                            fill="currentColor" />
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z"
                                            fill="currentColor" />
                                        <path
                                            d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Color Harriet Tubman</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z"
                                            fill="currentColor" />
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z"
                                            fill="currentColor" />
                                        <path
                                            d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Digital Photography</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z"
                                            fill="currentColor" />
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z"
                                            fill="currentColor" />
                                        <path
                                            d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                            </div>
                        </li>
                    </ul>

                    <div class="d-flex mb-5">
                        <h5 class="mb-0 me-auto">Order Subtotal</h5>
                        <h5 class="mb-0">$121.87</h5>
                    </div>

                    <div class="d-md-flex justify-content-between">
                        <a href="#"
                            class="d-block d-md-inline-block mb-4 mb-md-0 btn btn-primary btn-sm-wide">VIEW CART</a>
                        <a href="#"
                            class="d-block d-md-inline-block btn btn-teal btn-sm-wide text-white">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('user.lesson.header')
    <!-- COURSE
    ================================================== -->
    <div class="container container-wd">
        <div class="row pt-8 pb-10">
            <div class="col-lg-8">
                <div class="video-container">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/0tFUfuEhh28?si=jp375n1jwbrkfzeE" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-portgore rounded p-6">
                    <!-- Search -->
                    <form class="mb-5">
                        <div class="input-group rounded">
                            <div class="input-group-prepend">
                                <button class="btn btn-sm text-secondary bg-dark" type="submit">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                            fill="currentColor" />
                                        <path
                                            d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z"
                                            fill="currentColor" />
                                    </svg>

                                </button>
                            </div>
                            <input class="form-control form-control-sm border-0 ps-0 bg-dark" type="search"
                                placeholder="Search item" aria-label="Search">
                        </div>
                    </form>

                    <div id="accordionCurriculum2">
                        <div class="overflow-hidden bg-dark rounded mb-6">
                            <div class="d-flex align-items-center" id="curriculumheadingOne">
                                <h5 class="mb-0 w-100">
                                    <button
                                        class="d-flex align-items-center p-5 min-height-80 text-white fw-medium collapse-accordion-toggle line-height-one"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#CurriculumcollapseOne" aria-expanded="true"
                                        aria-controls="CurriculumcollapseOne">
                                        <span class="me-4 text-white d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="15" height="2" fill="currentColor" />
                                            </svg>

                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 7H15V9H0V7Z" fill="currentColor" />
                                                <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor" />
                                            </svg>

                                        </span>

                                        Introduction
                                    </button>
                                </h5>
                            </div>

                            <div id="CurriculumcollapseOne" class="collapse show"
                                aria-labelledby="curriculumheadingOne" data-parent="#accordionCurriculum">
                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Introduction to the course
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Introduction
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Structure of the course
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Required Tools
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>

                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Get Your Free E-book
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-dark rounded mb-6">
                            <div class="d-flex align-items-center" id="curriculumheadingTwo">
                                <h5 class="mb-0 w-100">
                                    <button
                                        class="d-flex align-items-center p-5 min-height-80 text-white fw-medium collapse-accordion-toggle line-height-one"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#CurriculumcollapseTwo" aria-expanded="true"
                                        aria-controls="CurriculumcollapseTwo">
                                        <span class="me-4 text-white d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="15" height="2" fill="currentColor" />
                                            </svg>

                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 7H15V9H0V7Z" fill="currentColor" />
                                                <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor" />
                                            </svg>

                                        </span>

                                        Design Basics
                                    </button>
                                </h5>
                            </div>

                            <div id="CurriculumcollapseTwo" class="collapse show"
                                aria-labelledby="curriculumheadingTwo" data-parent="#accordionCurriculum">
                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Intro to Design Basics
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Layout
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            45 min</div>
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Visual hierarchy
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <button
                                            class="btn btn-sm btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-1">30
                                            min</button>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Visual noise
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            45 min</div>

                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Iconography
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Typography
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-dark rounded mb-6">
                            <div class="d-flex align-items-center" id="curriculumheadingThree">
                                <h5 class="mb-0 w-100">
                                    <button
                                        class="d-flex align-items-center p-5 min-height-80 text-white fw-medium collapse-accordion-toggle line-height-one"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#CurriculumcollapseThree" aria-expanded="true"
                                        aria-controls="CurriculumcollapseThree">
                                        <span class="me-4 text-white d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="15" height="2" fill="currentColor" />
                                            </svg>

                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 7H15V9H0V7Z" fill="currentColor" />
                                                <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor" />
                                            </svg>

                                        </span>

                                        Figma Academy
                                    </button>
                                </h5>
                            </div>

                            <div id="CurriculumcollapseThree" class="collapse show"
                                aria-labelledby="curriculumheadingThree" data-parent="#accordionCurriculum">
                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Introduction to the course
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Introduction
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Structure of the course
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Required Tools
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>

                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Get Your Free E-book
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-dark rounded mb-6">
                            <div class="d-flex align-items-center" id="curriculumheadingFour">
                                <h5 class="mb-0 w-100">
                                    <button
                                        class="d-flex align-items-center p-5 min-height-80 text-white fw-medium collapse-accordion-toggle line-height-one"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#CurriculumcollapseFour" aria-expanded="true"
                                        aria-controls="CurriculumcollapseFour">
                                        <span class="me-4 text-white d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="15" height="2" fill="currentColor" />
                                            </svg>

                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 7H15V9H0V7Z" fill="currentColor" />
                                                <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor" />
                                            </svg>

                                        </span>

                                        UI Elements
                                    </button>
                                </h5>
                            </div>

                            <div id="CurriculumcollapseFour" class="collapse show"
                                aria-labelledby="curriculumheadingFour" data-parent="#accordionCurriculum">
                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Intro to Design Basics
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Layout
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            45 min</div>
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Visual hierarchy
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            30 min</div>
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Visual noise
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div
                                            class="badge btn-orange-soft text-white-70 me-5 font-size-sm fw-normal py-2">
                                            45 min</div>

                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="14" height="18" viewBox="0 0 14 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Iconography
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <a href="#" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="border-top px-5 border-color-20 py-4 min-height-70 d-md-flex align-items-center">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            Typography
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div class="text-secondary d-flex">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="assets/libs/aos/dist/aos.js"></script>
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 12:13:07 GMT -->

</html>
