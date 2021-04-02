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


    <!-- Custom styles for this template -->
    <style>
      .img{
        width: 100%;
        height: 15vw;
        object-fit: cover;
      }

      .box{
        background-color: #1f8585;
        color: #ffffff;
        font-weight: 500;
      }

      .search_box {
        width: 300px;
        border-radius: 5px;
        border: 0;
        padding: 5px;
      }

      .search_btn {
        border: 0px;
        background-color: transparent;
        margin-left: -35px;
        outline: none;
      }
    
      .search_btn:focus {
        outline: none;
        color: #1f8585;
      }
    
      .search_btn:hover {
        color: #1f8585;
      }
    </style>

  </head>
  <body>
  @extends('layouts.app')
    @section('content')
    <div class="container-fluid">
      <div class="box rounded text-center p-5 mt-5 mb-5">
        <form action="" method="GET">
          <label for="autocomplete-search-input" class="label position-relative">SEARCH YOUR COURSE HERE &emsp;</label>
          <input class="search_box" type="text" name="q">
          <button type="submit" class="search_btn">
            <i class="fa fa-search " aria-hidden="true"></i>
          </button>
        </form>
      </div><hr>
    
      <div class="p-3"><h1>All Courses</h1></div>

      <!--raw1-->
      <div class="raw d-flex mt-4">
      <div class="row">
      @foreach($course as $key => $data)
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
              <img class="img" src="{{$data->imagesrc}}">
              <div class="card-body bg-light">
                <h5 class="card-title">{{$data->fullname}}</h5>
                <p class="card-text">{{$data->idnumber}}</p>
                <a class="card-link stretched-link" href="/{{$data->id}}"></a>
              </div>
          </div>
        </div>
        @endforeach
        </div>
        
      </div>
     
      </div>
    </div>



    <!-- Bootstrap js link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
  </body>
</html>
