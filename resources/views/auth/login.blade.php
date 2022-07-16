<!-- route register -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">


    <style>
        body {
            background-image: url('../images/l-page.png');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <section class="" style="margin-top:10rem; margin-bottom:10rem">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <div class="card border-0" style="border-radius:25px; background: rgb(245,245,245);
background: linear-gradient(90deg, rgba(245,245,245,1) 35%, rgba(229,229,229,1) 70%, rgba(214,211,209,1) 100%);">
                        <div class="card-body">
                            <div class="container">
                                <p class="mb-5" style="font-family: 'DM Serif Display', serif; font-size:2rem;">Login</p>
                                <p>Please log in your credentials</p>
                                <form action="{{route('login')}}" method="post">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email">
                                        @error('email')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control shadow-none @error('password') is-invalid @enderror" value="{{old('password')}}" name="password" id="password">
                                        @error('password')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                                <label class="form-check-label" for="remember">
                                                    Remember me
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <a href="{{ route('password.request') }}" class="text-warning fw-bold float-end">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <a href="register" class="float-start fw-bold">Register an account</a>
                                        <button class="btn btn-dark float-end" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>