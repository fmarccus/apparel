<!-- route register -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        html {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        body {
            background-image: url('../images/contact.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <section class="pb-5" style="margin-top:5rem; margin-bottom:10rem">
        <div class="container">
            @if(session()->has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Message sent successfully',
                    footer: 'We will get back to you as soon as we can :)'
                })
            </script>
            @else
            @endif
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <div class="card border-0" style="background: rgb(245,245,245);background: linear-gradient(90deg, rgba(245,245,245,1) 35%, rgba(229,229,229,1) 70%, rgba(214,211,209,1) 100%);">
                        <div class="card-body">
                            <div class="container">
                                <a href="/dashboard" class="btn btn-light">Back</a>
                                <p class="mb-5" style="font-family: 'DM Serif Display', serif; font-size:2rem;">Contact Rye Apparel</p>
                                <p>Let's get this conversation started. Tell us a bit about your concern and we'll get in touch with you as soon as we can.</p>
                                <form action="{{route('messages.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input value="{{$fill_name}}" type="text" class="form-control shadow-none @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="name">
                                        @error('name')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input value="{{$fill_email}}" type="email" class="form-control shadow-none @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email">
                                        @error('email')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input value="{{$fill_contact}}" type="text" class="form-control shadow-none @error('contact') is-invalid @enderror" value="{{old('contact')}}" name="contact" id="contact">
                                        @error('contact')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="nature" class="form-label">Nature of Concern</label>
                                        <select class="form-control @error('nature') is-invalid @enderror" name="nature" id="nature">
                                            <option>Inquiry</option>
                                            <option>I have a technical issue on my end</option>
                                            <option>Asking for a refund</option>
                                            <option>Others</option>
                                        </select>
                                        @error('nature')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Please explain your concern</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="5"></textarea>
                                        @error('message')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <button class="btn btn-dark" type="submit">Send </button>
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