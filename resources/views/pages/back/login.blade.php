<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Best Store</title>

        <!-- Bootstrap -->
        <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('back/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('back/css/nprogress.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{asset('back/css/custom.min.css')}}" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if(count( $errors ) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <p>{{ $error }}</p>
                    </div>
               @endforeach
            @endif
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
              <h1>Login Form</h1>
              <div>
                <input class="form-control" placeholder="example@gmail.com" type="email" name="email" :value="old('email')" required autofocus/>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <input class="btn btn-default" type="submit" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>

</html>
