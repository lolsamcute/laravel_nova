<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/logo.svg" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used by this page)-->
		<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-minimize="on" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="/home" class="d-lg-none">
								<img alt="Logo" src="/logo.svg" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
							
								
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-lg-3">
									<!--begin::Menu- wrapper-->
									<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
												<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
												<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
												<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
											<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
												</li>
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
																			<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
																<div class="text-gray-400 fs-7">Phase 1 development</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 hr</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																			<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																			<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
																<div class="text-gray-400 fs-7">Confidential staff documents</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-warning">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
																			<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
																<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="currentColor" />
																			<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="currentColor" />
																			<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="currentColor" />
																			<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
																<div class="text-gray-400 fs-7">New frontend admin theme</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor" />
																			<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
																<div class="text-gray-400 fs-7">Product launch status update</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-info">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-info">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
																			<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
																<div class="text-gray-400 fs-7">Collection of banner images</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-warning">
																		<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor" />
																			<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
																<div class="text-gray-400 fs-7">Collection of SVG icons</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">20 March</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column px-9">
													<!--begin::Section-->
													<div class="pt-10 pb-0">
														<!--begin::Title-->
														<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
														<!--end::Title-->
														<!--begin::Text-->
														<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
														<!--end::Text-->
														<!--begin::Action-->
														<div class="text-center mt-5 mb-9">
															<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Section-->
													<!--begin::Illustration-->
													<div class="text-center px-4">
														<img class="mw-100 mh-200px" alt="image" src="/assets/media/illustrations/sketchy-1/1.png" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Just now</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 week</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Mar 5</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">May 15</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Apr 3</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jun 30</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jul 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Sep 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Dec 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::Notifications-->


								
								

								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-lg-3">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
										<span class="svg-icon theme-light-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
												<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
												<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
												<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
												<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
												<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
												<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
												<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
												<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
										<span class="svg-icon theme-dark-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
												<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
												<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
												<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
															<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
															<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
															<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
															<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
															<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
															<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
															<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
															<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="/assets/media/avatars/300-1.jpg" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->name}}
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--
										<div class="menu-item px-5">
											<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										-->
										
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start">
											<a href="#" class="menu-link px-5">
												<span class="menu-title">My Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											
										</div>
										<!--end::Menu item-->
										
									
										<!--begin::Menu item-->
										<div class="menu-link px-5">
											<a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                             Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                  
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
												<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="/home">
								<img alt="Logo" src="/logo.svg" class="h-25px app-sidebar-logo-default" />
								<img alt="Logo" src="/logo.svg" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate active" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
								<span class="svg-icon svg-icon-2 rotate-180">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
										<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->



						@include('layouts.sidebar')



						
					</div>
					<!--end::sidebar-->






            @yield('content')
       




            	</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="/assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
												<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="/assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
												<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="/assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="/assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="/assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="/assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="/assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="/assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="/assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
													<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
												<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
												<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="bi bi-three-dots fs-3"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-paperclip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-upload fs-3"></i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Engage drawers-->
		<!--begin::Demos drawer-->
		<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_engage_demos_header">
					<h3 class="card-title fw-bold text-gray-700">Demos</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_engage_demos_body">
					<!--begin::Content-->
					<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
						<!--begin::Wrapper-->
						<div class="mb-0">
							<!--begin::Heading-->
							<div class="mb-7">
								<div class="d-flex flex-stack">
									<h3 class="mb-0">Metronic Licenses</h3>
									<a href="https://themeforest.net/licenses/standard" class="fw-semibold" target="_blank">License FAQs</a>
								</div>
							</div>
							<!--end::Heading-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
										</div>
										<div class="fs-7 text-muted">For single end product used by you or one client</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-semibold me-n1">$</span>
										<span class="text-dark fs-1 fw-bold">39</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
										</div>
										<div class="fs-7 text-muted">For single SaaS app with paying users</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-semibold me-n1">$</span>
										<span class="text-dark fs-1 fw-bold">969</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
										</div>
										<div class="fs-7 text-muted">Reach us for custom license offers.</div>
									</div>
									<div class="text-nowrap">
										<a href="https://devs.keenthemes.com" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::Purchase-->
							<a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy Now</a>
							<!--end::Purchase-->
							<!--begin::Demos-->
							<div class="mb-0">
								<h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
								<!--begin::Row-->
								<div class="row g-5">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo1.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo2.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo3.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo4.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo5.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo6.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo7.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo8.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo9.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo10.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">Demo 10</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo11.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo12.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">Demo 12</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo13.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo14.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">Demo 14</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo15.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">Demo 15</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo16.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">Demo 16</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo17.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">Demo 17</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo18.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">Demo 18</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo19.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">Demo 19</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo20.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">Demo 20</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo21.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo21" class="btn btn-sm btn-success shadow">Demo 21</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo22.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo22" class="btn btn-sm btn-success shadow">Demo 22</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo23.png" alt="demo" class="w-100 opacity-25" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Demos-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Demos drawer-->
		<!--begin::Help drawer-->
		<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_help_header">
					<h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_help_body">
					<!--begin::Content-->
					<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
						<!--begin::Support-->
						<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
							<!--begin::Heading-->
							<h2 class="fw-bold mb-5">Support at
							<a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a></h2>
							<!--end::Heading-->
							<!--begin::Description-->
							<div class="fs-5 fw-semibold mb-5">
								<span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
								<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
							</div>
							<!--end::Description-->
							<!--begin::Link-->
							<a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
							<!--end::Link-->
						</div>
						<!--end::Support-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
								<span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation & Videos</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to live demos and code examples to get started.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
										<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
										<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins & Components</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house components and customized 3rd-party plugins.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
								<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
								<span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
										<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and export the HTML for server side integration.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
								<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
								<span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
										<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
										<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://devs.keenthemes.com/metronic" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic Downloads</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and demo with one click.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
								<!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
								<span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor" />
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New ?</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements added with our users feedback in mind.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Help drawer-->
		<!--end::Engage drawers-->
		<!--begin::Engage toolbar-->
		<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
			<!--begin::Demos drawer toggle-->
			<button id="kt_engage_demos_toggle" class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0" title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
				<span id="kt_engage_demos_label">Demos</span>
			</button>
			<!--end::Demos drawer toggle-->
			<!--begin::Help drawer toggle-->
			<button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
			<!--end::Help drawer toggle-->
		</div>
		<!--end::Engage toolbar-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Upgrade Plan</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="/assets/js/custom/pages/general/pos.js"></script>
		<script src="/assets/js/widgets.bundle.js"></script>
		<script src="/assets/js/custom/widgets.js"></script>
		<script src="/assets/js/custom/apps/chat/chat.js"></script>
		<script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="/assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html><!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/logo.svg" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used by this page)-->
		<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-minimize="on" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="/home" class="d-lg-none">
								<img alt="Logo" src="/logo.svg" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
							
								
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-lg-3">
									<!--begin::Menu- wrapper-->
									<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
												<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
												<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
												<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
											<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
												</li>
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
																			<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
																<div class="text-gray-400 fs-7">Phase 1 development</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 hr</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																			<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																			<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
																<div class="text-gray-400 fs-7">Confidential staff documents</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-warning">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
																			<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
																<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="currentColor" />
																			<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="currentColor" />
																			<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="currentColor" />
																			<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
																<div class="text-gray-400 fs-7">New frontend admin theme</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor" />
																			<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
																<div class="text-gray-400 fs-7">Product launch status update</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-info">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-info">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
																			<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
																<div class="text-gray-400 fs-7">Collection of banner images</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-warning">
																		<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor" />
																			<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
																<div class="text-gray-400 fs-7">Collection of SVG icons</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">20 March</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column px-9">
													<!--begin::Section-->
													<div class="pt-10 pb-0">
														<!--begin::Title-->
														<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
														<!--end::Title-->
														<!--begin::Text-->
														<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
														<!--end::Text-->
														<!--begin::Action-->
														<div class="text-center mt-5 mb-9">
															<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Section-->
													<!--begin::Illustration-->
													<div class="text-center px-4">
														<img class="mw-100 mh-200px" alt="image" src="/assets/media/illustrations/sketchy-1/1.png" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Just now</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 week</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Mar 5</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">May 15</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Apr 3</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jun 30</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jul 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Sep 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Dec 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::Notifications-->


								
								

								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-lg-3">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
										<span class="svg-icon theme-light-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
												<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
												<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
												<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
												<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
												<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
												<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
												<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
												<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
										<span class="svg-icon theme-dark-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
												<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
												<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
												<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
															<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
															<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
															<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
															<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
															<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
															<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
															<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
															<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="/assets/media/avatars/300-1.jpg" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->name}}
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--
										<div class="menu-item px-5">
											<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										-->
										
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start">
											<a href="#" class="menu-link px-5">
												<span class="menu-title">My Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											
										</div>
										<!--end::Menu item-->
										
									
										<!--begin::Menu item-->
										<div class="menu-link px-5">
											<a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                             Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                  
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
												<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="/home">
								<img alt="Logo" src="/logo.svg" class="h-25px app-sidebar-logo-default" />
								<img alt="Logo" src="/logo.svg" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate active" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
								<span class="svg-icon svg-icon-2 rotate-180">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
										<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->



						@include('layouts.menu.sidebar')



						
					</div>
					<!--end::sidebar-->






            @yield('content')
       




            	</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="/assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="/assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
												<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="/assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
												<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="/assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="/assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="/assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="/assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="/assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="/assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="/assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="/assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
													<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
												<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
												<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="bi bi-three-dots fs-3"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-paperclip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-upload fs-3"></i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Engage drawers-->
		<!--begin::Demos drawer-->
		<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_engage_demos_header">
					<h3 class="card-title fw-bold text-gray-700">Demos</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_engage_demos_body">
					<!--begin::Content-->
					<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
						<!--begin::Wrapper-->
						<div class="mb-0">
							<!--begin::Heading-->
							<div class="mb-7">
								<div class="d-flex flex-stack">
									<h3 class="mb-0">Metronic Licenses</h3>
									<a href="https://themeforest.net/licenses/standard" class="fw-semibold" target="_blank">License FAQs</a>
								</div>
							</div>
							<!--end::Heading-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
										</div>
										<div class="fs-7 text-muted">For single end product used by you or one client</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-semibold me-n1">$</span>
										<span class="text-dark fs-1 fw-bold">39</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
										</div>
										<div class="fs-7 text-muted">For single SaaS app with paying users</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-semibold me-n1">$</span>
										<span class="text-dark fs-1 fw-bold">969</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
										</div>
										<div class="fs-7 text-muted">Reach us for custom license offers.</div>
									</div>
									<div class="text-nowrap">
										<a href="https://devs.keenthemes.com" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::Purchase-->
							<a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy Now</a>
							<!--end::Purchase-->
							<!--begin::Demos-->
							<div class="mb-0">
								<h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
								<!--begin::Row-->
								<div class="row g-5">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo1.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo2.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo3.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo4.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo5.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo6.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo7.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo8.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo9.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo10.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">Demo 10</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo11.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo12.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">Demo 12</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo13.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo14.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">Demo 14</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo15.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">Demo 15</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo16.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">Demo 16</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo17.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">Demo 17</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo18.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">Demo 18</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo19.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">Demo 19</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo20.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">Demo 20</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo21.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo21" class="btn btn-sm btn-success shadow">Demo 21</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo22.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo22" class="btn btn-sm btn-success shadow">Demo 22</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo23.png" alt="demo" class="w-100 opacity-25" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
											<div class="overlay-wrapper">
												<img src="/assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Demos-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Demos drawer-->
		<!--begin::Help drawer-->
		<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_help_header">
					<h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_help_body">
					<!--begin::Content-->
					<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
						<!--begin::Support-->
						<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
							<!--begin::Heading-->
							<h2 class="fw-bold mb-5">Support at
							<a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a></h2>
							<!--end::Heading-->
							<!--begin::Description-->
							<div class="fs-5 fw-semibold mb-5">
								<span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
								<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
							</div>
							<!--end::Description-->
							<!--begin::Link-->
							<a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
							<!--end::Link-->
						</div>
						<!--end::Support-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
								<span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation & Videos</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to live demos and code examples to get started.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
										<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
										<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins & Components</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house components and customized 3rd-party plugins.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
								<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
								<span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
										<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and export the HTML for server side integration.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
								<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
								<span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
										<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
										<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://devs.keenthemes.com/metronic" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic Downloads</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and demo with one click.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
								<!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
								<span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor" />
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New ?</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements added with our users feedback in mind.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-gray-400 svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Help drawer-->
		<!--end::Engage drawers-->
		<!--begin::Engage toolbar-->
		<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
			<!--begin::Demos drawer toggle-->
			<button id="kt_engage_demos_toggle" class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0" title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
				<span id="kt_engage_demos_label">Demos</span>
			</button>
			<!--end::Demos drawer toggle-->
			<!--begin::Help drawer toggle-->
			<button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
			<!--end::Help drawer toggle-->
		</div>
		<!--end::Engage toolbar-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Upgrade Plan</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="/assets/js/custom/pages/general/pos.js"></script>
		<script src="/assets/js/widgets.bundle.js"></script>
		<script src="/assets/js/custom/widgets.js"></script>
		<script src="/assets/js/custom/apps/chat/chat.js"></script>
		<script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="/assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>