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
    <form class="form-signin" method="POST">
        @csrf
        <img src="{{url('https://innovillage.id/wp-content/uploads/2020/10/Logo-Hi-Res-Innovillage_Logo-Innovillage-1024x183.png')}}" alt="Innovillage" height=50px>
        <br>
        <label for="inputName" class="sr-only">Username</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Innovillage 2020</p>
    </form>
  </body>
  </html>