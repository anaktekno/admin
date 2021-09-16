<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innovillage</title>

    <link rel="canonical" href="{{url('https://getbootstrap.com/docs/4.0/examples/sign-in/')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{url('https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css')}}" rel="stylesheet">
  </head>

  <body class="text-center">
  <form class="form-signin" method="POST" action="{{route('regiz')}}">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">INNOVILLAGE</h1>
    <label for="inputName" class="sr-only">Nama</label>
    <input type="text" name="name" id="inputName" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Please insert your name" value="{{old('name')}}" required autofocus>
    <br>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" value="{{old('email')}}">
    <br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
    <label for="inputPassword" class="sr-only">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; Innovillage 2020</p>
  </form>
</body>
</html>