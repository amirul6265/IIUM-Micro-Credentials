<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1200px-International_Islamic_University_Malaysia_logo.svg.png">
	<title>IIUM Micro-Credentials</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">  

</head>
<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center saf__info">
                <img  class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1200px-International_Islamic_University_Malaysia_logo.svg.png">
				<h4>IIUM<br>Micro-Credentials</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h3>Sign in</h3>
					</div>
					<div class="row">
						<form method="POST" action="{{ route('login') }}" class="form-group">
              @csrf
							<div class="row">
							  <input id="username" type="username" placeholder="Username" class="form__input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                        
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
							<div class="row">
							  <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              </div>
							<div class="row">
								<input type="checkbox" name="remember" id="remember" class=""  {{ old('remember') ? 'checked' : '' }}>
                
								<label for="remember">Remember Me!</label>
							</div>
							<div class="row">
								<input type="submit" value="Submit" class="btn-login">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>