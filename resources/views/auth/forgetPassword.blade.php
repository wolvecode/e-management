<!DOCTYPE html>
<html>

    <head>
        <title>Forget Password</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

            body {
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }

            .navbar-laravel {
                box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
            }

            .navbar-brand,
            .nav-link,
            .my-form,
            .login-form {
                font-family: Raleway, sans-serif;
            }

            .my-form {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row {
                margin-left: 0;
                margin-right: 0;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="#">Laravel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Reset Password</div>
                            <div class="card-body">

                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif

                                <form action="{{ route('forget.password.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                            Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="email"
                                                required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>
