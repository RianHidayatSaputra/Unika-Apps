<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body class="text-center">
    <div class="row justify-content-center mt-5 mx-5 px-5">
        <h1 class="fw-normal mt-4">Please Sign Up</h1>
        <div class="col-md-4 mt-5 pt-5">
            <main class="form-signin m-auto">
                <form method="post" action="{{ url('/register') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                            id="name" placeholder="name@example.com" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " name="email"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror "
                            name="password" id="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password">Password</label>
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control py-2 @error('photo') is-invalid @enderror"
                            id="photo" name="photo" onchange="previewImage()">
                        @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <img class="img-preview mb-3 img-fluid mt-2 col-md-4 w-100">

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                    <p class="mt-4 mb-3 text-muted">Already have account? <a href="{{ url('/login') }}"
                            class="text-dark text-muted text-decoration-none fst-italic">Sign In!</a></p>
                </form>
            </main>
        </div>
    </div>
    <script>
        previewImage = () => {
            const image = document.querySelector('#photo')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
</body>

</html>
