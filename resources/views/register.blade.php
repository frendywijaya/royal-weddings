<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/demo/demo_configurator.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-static py-2">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="{{ asset('admin/images/logo_icon.svg') }}" alt="">
                    <img src="{{ asset('admin/images/logo_text_light.svg') }}" class="d-none d-sm-inline-block h-16px ms-3"
                        alt="">
                </a>
            </div>

            <div class="d-flex justify-content-end align-items-center ms-auto">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a href="/login" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
                            <div class="d-flex align-items-center mx-md-1">
                                <i class="ph-user-circle"></i>
                                <span class="d-none d-md-inline-block ms-2">Login</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Login form -->
                    <form method="POST" action="{{ route('register') }}" class="login-form">
                        @csrf
                        <div class="card mb-0">
                            <div class="card-body">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <div class="text-center mb-3">
                                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                        <img src="{{ asset('admin/images/logo_icon.svg') }}" class="h-48px" alt="">
                                    </div>
                                    <h5 class="mb-0">Daftar Akun Baru</h5>
                                    <span class="d-block text-muted">Masukan data diri di sini </span>
                                </div>

                                <div class="mb-3">
                                    <x-label for="name" :value="__('Name')" class="form-label" />
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <x-input id="name" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                        {{-- <x-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <x-label for="email" :value="__('email')" class="form-label" />
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <x-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username"
                                            placeholder="john@doe.com" />
                                        {{-- <x-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <x-label class="form-label" for="password" :value="__('Password')" />
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <x-input id="password" class="form-control" type="password"
                                            name="password" required autocomplete="current-password"
                                            placeholder="•••••••••••" />
                                        {{-- <x-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <x-label class="form-label" for="password" :value="__('Confrim Password')" />
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <x-input id="password_confirmation" class="form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="•••••••••••" />
                                        {{-- <x-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <x-button class="btn btn-primary w-100">
                                        {{ __('Daftar') }}
                                    </x-button>
                                </div>

                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('login') }}">
                                            {{ __('Sudah punya akun?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                </div>

                <!-- Footer -->
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; 2023 <a href="#">Invoice App Kit</a></span>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


</body>

</html>

