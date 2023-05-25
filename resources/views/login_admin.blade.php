<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
}
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="{{route('admin')}}" method="POST">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example13">User name</label>
                  <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" />

                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example23">Password</label>
                  <input type="password" id="form1Example23" class="form-control form-control-lg" name="password"/>
                </div>
      
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>