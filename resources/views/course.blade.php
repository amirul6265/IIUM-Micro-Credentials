<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

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

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>
        @foreach($programmetitle as $key => $data)
          {{$data->description}}
        @endforeach
      </h1>
    </div>
  </section>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      @foreach($course as $key => $data)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$data->imagesrc}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text">
              <h2>{{$data->fullname}}</h2>
                    <p>
                        {{$data->idnumber}}
                    </p> 
                </p>     
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" onclick="location.href = '{{ url('/' . $data->id) }}'" class="btn btn-sm btn-outline-secondary">Enroll</button> 
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
<footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
