<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <!-- <title>Computer Science - Subjects</title> -->

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <!-- <header>
  <div class="collapse bg-iium" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">IIUM SAF</h4>
            <p class="text-muted">IIUM Student Academic Framework is a learning platform for IIUM students to ease students in enroll in various courses not limited to their major courses. </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <ul class="list-unstyled">
            <li>
              <a href="https://twitter.com/officialiium?lang=en">
                <img src="https://www.creativefreedom.co.uk/wp-content/uploads/2017/06/Twitter-featured.png" alt="Twitter" style="height:50px; width:50px;"></li> <br>
              </a>
            <li>
              <a href="https://www.facebook.com/OfficialIIUM">
                <img src="https://i.pinimg.com/736x/ac/57/3b/ac573b439cde3dec8ca1c6739ae7f628.jpg" alt="Facebook" style="height:50px; width:50px;"></li> <br>
              </a>
            <li>
              <a href="https://www.instagram.com/officialiium/?hl=en">
                <img src="https://www.brandchannel.com/wp-content/uploads/2016/05/instagram-new-logo-may-2016.jpg" alt="Instagram" style="height:50px; width:50px;"></li>
              </a>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>List of subjects</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header> -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Bachelor of Computer Science</h1>
      <p class="lead text-muted">Computer Science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal mostly with software and software systems; this includes their theory, design, development, and application.</p>
      <p>
        <a href="https://en.wikipedia.org/wiki/Computer_science" class="btn btn-primary my-2">View more</a>
      </p>
    </div>
  </section>

<?php

    $result = mysqli_connect("localhost","root","","moodle") or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result, "moodle") or die("Could not select the databse." .mysqli_error());
    $query = mysqli_query($result,"select shortname,fullname,summary from mdl_course where id = 3");
    while($rows = mysqli_fetch_array($query))
    {
        $sname = $rows['shortname'];
        $fname = $rows['fullname'];
        $sum = $rows['summary'];
    }
?>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://inteng-storage.s3.amazonaws.com/images/MARCH/sizes/CPP-Logo-Main_md.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text">
              <h2>{{$fname}}</h2>
                    <p>
                        {{$sname}}
                    </p> 
                    <p>
                        {{$sum}}
                    </p>  
                </p>     
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" onclick="location.href = '/bcscourse/CSC3401'" class="btn btn-sm btn-outline-secondary">View More</button> 
                   
                </div>
                
              </div>
            </div>
          </div>
        </div>
<?php

    $result = mysqli_connect("localhost","root","","moodle") or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result, "moodle") or die("Could not select the databse." .mysqli_error());
    $query = mysqli_query($result,"select shortname,fullname,summary from mdl_course where id = 4");
    while($rows = mysqli_fetch_array($query))
    {
        $sname = $rows['shortname'];
        $fname = $rows['fullname'];
        $sum = $rows['summary'];
    }
?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://bs-uploads.toptal.io/blackfish-uploads/blog/post/seo/og_image_file/og_image/15493/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text">
              <h2>{{$sname}}</h2>
                    <p>
                        {{$fname}}
                    </p> 
                    <p>
                        {{$sum}}
                    </p>  
                </p> 
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" onclick="location.href = '/bcscourse/CSC3305'" class="btn btn-sm btn-outline-secondary">View More</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>

<?php

    $result = mysqli_connect("localhost","root","","moodle") or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result, "moodle") or die("Could not select the databse." .mysqli_error());
    $query = mysqli_query($result,"select shortname,fullname,summary from mdl_course where id = 5");
    while($rows = mysqli_fetch_array($query))
    {
        $sname = $rows['shortname'];
        $fname = $rows['fullname'];
        $sum = $rows['summary'];
    }
?>        
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://az-new-oss-bkt.oss-us-west-1.aliyuncs.com/uploads/2018/04/HCI_featured-3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text">
              <h2>{{$sname}}</h2>
                    <p>
                        {{$fname}}
                    </p> 
                    <p>
                        {{$sum}}
                    </p>  
                </p> 
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" onclick="location.href = '/bcscourse/CSC3304'" class="btn btn-sm btn-outline-secondary">View More</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
