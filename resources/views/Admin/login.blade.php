<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</body>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4"><div class="card">
                <h3 class="card-header text-center">Login</h3>
                <div class="card-body">
                    <form method="POST" action="{{ url('login') }}">
               @csrf
               <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                   autofocus>
                 @if ($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
                 @endif
                </div>
                 <div class="form-group mb-3"><input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                 @if ($errors->has('password'))
                 <span class="text-danger">{{ $errors->first('password') }}</span>
                 @endif
                 </div>
                 <!--
                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            -->
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</main>
</html>

