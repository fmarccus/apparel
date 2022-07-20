<!-- route register -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

    <style>
        html {
            height: 90%;
            width: 100%;
            object-fit: cover;
        }

        body {
            background-image: url('../images/verify.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <section class="pb-5" style="margin-top:18rem; margin-bottom:10rem">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 mt-5">
                            <div class="card border-0 " style="background: rgb(245,245,245);background: linear-gradient(90deg, rgba(245,245,245,1) 35%, rgba(229,229,229,1) 70%, rgba(214,211,209,1) 100%);">
                                <div class="card-body">
                                    <div class="container">
                                        <p class="mb-5" style="font-family: 'DM Serif Display', serif; font-size:2rem;">Verify email address</p>
                                        @if (session('status') == 'verification-link-sent')
                                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <span>
                                                A new verification link has been sent to the email address you provided in your profile settings.</span>
                                        </div>
                                        @endif
                                        <p>Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <form action="{{ route('verification.send') }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-dark" type="submit">Resend verification email</button>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button class="float-end btn btn-secondary" type="submit">Logout</button>
                                                </form>
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
    </section>
</body>

</html>