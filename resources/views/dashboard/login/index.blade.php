<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body class="text-center">
    <div class="row justify-content-center mt-5 mx-5">
        <div class="row justify-content-center">
            @if (session('success'))
                <div class="alert alert-success w-75" role="alert">
                    {{ session('success') }}
                </div>
                <h1 class="fw-normal mt-5 pt-4">Please Sign In</h1>
            @elseif(session('loginError'))
                <div class="alert alert-danger   w-75" role="alert">
                    {{ session('loginError') }}
                </div>
                <h1 class="fw-normal mt-5 pt-4">Please Sign In</h1>
            @else
                <h1 class="fw-normal mt-4">Please Sign In</h1>
            @endif

        </div>
        <div class="col-md-4 mt-5 pt-5">
            <main class="form-signin m-auto">
                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}
                    {{-- <input type="hidden" name="_token"> --}}
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " name="email"
                            id="email" placeholder="name@example.com" autofocus required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror "
                            name="password" id="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                </form>
                @if (session('success'))
                @elseif(session('loginError'))
                @else
                    <p class="mt-4 mb-3 text-muted">Dont't have an account? <a href="{{ url('/register') }}"
                            class="text-dark text-muted text-decoration-none fst-italic">Sign Up!</a></p>
                @endif
            </main>
        </div>
    </div>
</body>

</html>
