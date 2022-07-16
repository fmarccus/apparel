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
        html{
            height: 120%;
            width: 100%;
            object-fit: cover;
        }
        body {
            background-image: url('../images/rg-page.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
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
                    <div class="card border-0" style="border-radius:25px; background: rgb(245,245,245);background: linear-gradient(90deg, rgba(245,245,245,1) 35%, rgba(229,229,229,1) 70%, rgba(214,211,209,1) 100%);">
                        <div class="card-body">
                            <div class="container">
                                <p class="mb-5" style="font-family: 'DM Serif Display', serif; font-size:2rem;">Register</p>
                                <p>Please fill in the form to register your account</p>
                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control shadow-none @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="name">
                                        @error('name')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email">
                                        @error('email')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="text" class="form-control shadow-none @error('contact') is-invalid @enderror" value="{{old('contact')}}" name="contact" id="contact">
                                        @error('contact')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control shadow-none @error('address') is-invalid @enderror" value="{{old('address')}}" name="address" id="address">
                                        @error('address')
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
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control shadow-none @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}" name="password_confirmation" id="password_confirmation">
                                        @error('password_confirmation')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <p>Already have an account? <a href="login" class="fw-bold">Sign in here</a></p>
                                        <button class="btn btn-dark float-end rounded shadow" type="submit">Register</button>
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