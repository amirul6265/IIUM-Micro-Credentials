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
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item-p active">
            @foreach($kulliyyah as $key => $data)
            <img class="bd-placeholder-img" width="100%" height="100%" src="{{$data->imagesrc}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>
                  {{$data->description}}
                </h1>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row" id="course_categories">
          @foreach($programme as $key => $data)
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <h4>{{$data->description}}</h4>
            <p><a class="btn btn-secondary" href="{{$data->path}}" role="button">View details &raquo;</a></p>
          </div>
          @endforeach
        </div>
        <hr class="featurette-divider">
      </div><!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>