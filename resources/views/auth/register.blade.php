<!DOCTYPE html>
<html lang="en">

<head>

	<title>Register Signup Admin</title>	<
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/png">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <img src="./logo/eshuzo.png" width="150px" alt="" class="img-fluid mb-4">
						<h4 class="f-w-400">Sign up</h4>
						<hr>
                        <form class="form-horizontal" method="POST" action="{{route('register')}}">
                            @csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="name" name="name" placeholder="name" required autocomplete="">
						</div>
                        <div class="form-group mb-3">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" required autocomplete="">
						</div>
						<div class="form-group mb-3">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email address" required autocomplete="">
						</div>
                        
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="">
						</div>
                          
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="">
						</div>						                        
						<button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
						<hr>
						<p class="mb-2">Already have an account? <a href="{{route('login')}}" class="f-w-400">Signin</a></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{asset('backend/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pcoded.min.js')}}"></script>



</body>

</html>
