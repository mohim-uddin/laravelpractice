<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @include('layout.header')
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
          @if(session()->has("success"))
            <div class="alert alert-success">
              {{session()->get("success")}}
            </div>
          @endif
            @if(session()->has("errors"))
            <div class="alert alert-success">
              {{session()->get("errors")}}
            </div>
            @endif
         <div class="card" style="width: 18rem;">
         <h3 class="card-header text-center">Registratiion</h3>
            <div class="card-body">
                <form method="POST" action="{{route('register.post')}}">
                  @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                        @if ($errors->has('fullname'))
                          <span class="text-danger">
                              {{ $errors->first('fullname')}}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                        @if ($errors->has('email'))
                          <span class="text-danger">
                              {{ $errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @if ($errors->has('password'))
                          <span class="text-danger">
                              {{ $errors->first('password')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
        
            </div>
            </div>



        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>