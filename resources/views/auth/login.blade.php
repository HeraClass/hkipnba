<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.shared.title-meta', ['title' => "Log In"])
    @include('layouts.shared.head-css', ["mode" => $mode ?? '', "demo" => $demo ?? ''])
    <link rel="stylesheet" href="{{ asset('assets/css/background.css') }}">
</head>
<body>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">
                        <div class="card-body p-4">
                            <div class="text-center m-auto">
                                <div class="auth-logo">
                                    <a href="" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/images/logo_politeknik_negeri_bali.png') }}" alt="" height="200">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Masukkan username dan password Anda.</p>
                            </div>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</body>
</html>
