{{--  <!DOCTYPE html>
<html>
  <head>
  <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
             <a class="nav-link text-primary" href="http://127.0.0.1:8000/"> HOME </a>
          </li>
          <li class="nav-item">
             <a class="nav-link text-primary" href="http://127.0.0.1:8000/supplier"> SUPPLIER </a>
          </li>
          <li class="nav-item">
             <a class="nav-link text-primary" href="http://127.0.0.1:8000/customer"> CUSTOMER </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <form>
                 <div class="form-group">
                     <label for="formGroupExampleInput"> NAME </label>
                     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput2"> ADDRESS </label>
                     <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                     <br>
                     <input class="btn-primary" type="submit" name="" value="save">
                 </div>
            </form>
        </div>
    </div>

  </div>
  </body>
</html>  --}}
<!-- master.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Operations</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <br><br>
        @yield('content')
    </body>
</html>
