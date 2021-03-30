<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CSC 3304</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .jumbotron {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron h1 {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

.enrollbtn{
  margin-top:10px;
  margin-bottom:10px; 
  color:black;
  border-radius:5px;
  font-family: "Lucida Console", Monospace;
  font-size:18px;
}
.enrollbtn:hover{
  background-color:grey;
}

#col2{
  border:solid 1px;
  background-color:cornflowerblue;
  
}
#col3{
  border:solid 1px;
  background-color:darkcyan;
}


#desc{
  font-family: 'Monaco', monospace;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

* {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: center;
        margin-top:20px;
       
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color:darkslategrey;
        
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }

      .openButton:hover{
        background-color: firebrick;
        
      }
      #btnid{
        background-color:teal;

      }

      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 22%;
        top: 10%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
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
        <strong>CSC3304 - Machine Learning</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4" id="col1">
          <div class="gambaa">
            <img class="bd-placeholder-img card-img-top" width="300" height="250" src="https://az-new-oss-bkt.oss-us-west-1.aliyuncs.com/uploads/2018/04/HCI_featured-3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
          </div>
          <div class="openBtn">
              <button class="openButton" onclick="openForm()"><strong>ENROLL</strong></button>
            </div>
            <div class="loginPopup">
              <div class="formPopup" id="popupForm">
              <form method="POST" action="/api/add">
               @csrf
               <div class="formContainer">
                  <label for="userid">
                    <strong>Matric Number</strong>
                  </label>
                  <input type="text" id="userid" placeholder="Your Matric Number" name="userid" required>
                    <label for="enrolid">
                      <strong>Course Code</strong>
                    </label>
                  <input type="text" id="enrolid" placeholder="Code:37" name="enrolid" required>
                  <button type="submit" class="btn" id="btnid">Submit</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Exit</button>
                </div>
                </form>
              </div>
            </div>
        </div>
 
        <div class="col-md-4" id="col2">
         <table> 
            <tr>
              <tc> 
                <h3>DATE</h3> 22 Mar-25 June 
              </tc>
            </tr>
            <tr>
              <tc> 
                <h3><br>SUBJECT</h3>Theory
              </tc>
            </tr>
            <tr>
              <tc> 
                <h3><br>DIFFICULTY</h3>Easy
              </tc>
            </tr>
            <tr>
              <tc> 
                <h3><br>CREDIT HOUR</h3>3 
              </tc>
            </tr>
          </table>
                 
        </div>
        <div class="col-md-4" id="col3">
            <h3 id="desc">"Human-computer interaction (HCI) is a multidisciplinary field of study focusing on the design of computer technology and, in particular, the interaction between humans (the users) and computers."</h3>
            
        </div> 
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script type="text/javascript">

function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>

</html>
