<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'IIUM Micro-Credentials') }}</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1200px-International_Islamic_University_Malaysia_logo.svg.png">
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
  @extends('layouts.app')
    @section('content')
    <div class="container-fluid">
      <div class="p-3"><h1>Enrolled Courses</h1></div>
      <!-- <form action="/user/enrolled" method="GET">
        @csrf
        <div class="form-group row">
          <label for="matricnumber" class="col-sm-3 col-form-label">Matric Number</label>
            <div class="col-sm-9">
              <input name="matricnumber" type="text" class="form-control" id="matricnumber" placeholder="Enter your matric number">
            </div>
        </div>
      </form> -->

      <div class="container">
      <div class="row">
        <div class="col-md-5-7">   
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Course Code</th>
                        <th scope="col">Course Title</th>
                    </tr>
                        @foreach($coursesenrolled as $key=>$data)
                    <tr>
                        <td>{{$data->idnumber}}</td>
                        <td>{{$data->fullname}}</td>
                        @endforeach
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>
    </div>



    <!-- Bootstrap js link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>