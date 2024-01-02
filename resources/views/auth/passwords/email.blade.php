
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Reset | Kcreate Admin</title>
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
			<!--begin::Authentication - Password reset -->
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


                             @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        
							<form class="form w-100" method="POST" action="{{ route('password.email') }}">
                            @csrf
                           
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
                                    <input id="email" type="email" placeholder="Enter your Email" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									
									<!--end::Email-->
								</div>
								<!--begin::Actions-->
								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="button" class="btn btn-primary me-4">
										<!--begin::Indicator label-->
										<span class="indicator-label"> {{ __('Send Password Reset Link') }}</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Password reset-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="/assets/js/custom/authentication/reset-password/reset-password.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>