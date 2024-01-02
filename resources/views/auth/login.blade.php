<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Login | Kcreate Admin</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/logo.svg" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">	
        
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg10.jpeg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg10-dark.jpeg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<!--begin::Image-->
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/media/auth/agency.png" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/media/auth/agency-dark.png" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
						<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<!--begin::Wrapper-->
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<!--begin::Content-->
						<div class="w-md-400px">
							<!--begin::Form-->
                            
							
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Login to your account</h1>
									<!--end::Title-->
									
								</div>
								<!--begin::Heading-->

								  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
									<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
									
								@if (session('error'))
										<!-- / Swal View -->
										<script type="text/javascript">
											Swal.fire(
											'Error!',
											'{{ session('error') }}',
											'error'
											)
										</script>
										<!-- /End Swal View -->
									@endif
									
									
									@if (session('success'))
									<script type="text/javascript">
									Swal.fire(
									'Successful!',
									'{{ session('success') }}',
									'success'
									)
									</script>
									@endif
								
							<form class="form w-100" method="POST" action="{{ url('login') }}">
                             	@csrf
								<!--begin::Input group=-->
								<div class="fv-row mb-8">`
									<!--begin::Email-->

                                    <input id="email" placeholder="Enter your Email" type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $error }}</strong>
                                        </span>
                                    @enderror
									
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
                                     <input id="password" placeholder="Create password" type="password" class="form-control bg-transparent @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
									@error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $error }}</strong>
                                        </span>
                                    @enderror
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								
								<!--begin::Submit button-->
								<div class="d-grid mb-10">

								 <!-- <a class="btn btn-primary" href="/app/dashboard"><span class="indicator-label">Sign In</span></a> -->
									<button type="submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										
									</button>
								</div>
								<!--end::Submit button-->
								
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
