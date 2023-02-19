<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin Register Signin</title>
	
	<!-- Meta -->
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="./logo/logo.png"  width="150px" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<form class="form-horizontal" method="POST" action="{{route('login')}}">
                            @csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autocomplete="">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="password"  name="password" placeholder="Password" autocomplete="">
						</div>						
						<button class="btn btn-block btn-primary mb-4">Signin</button>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">Signup</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('backend/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pcoded.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>


</body>

</html>
