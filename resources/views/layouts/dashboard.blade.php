<!DOCTYPE html>

<html lang="en">

<head>
	<title>Dashboard</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />

	<link rel="shortcut icon" href="assets/dist/assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link href="../files/tdThTable.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
				<!--begin::Aside menu-->
				<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-7" id="kt_aside_menu">
					<!--begin::Aside Menu-->
					<div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer, #kt_header" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="102">
						<!--begin::Menu-->
						<div class="menu menu-column menu-rounded fw-bold" id="#kt_aside_menu" data-kt-menu="true">
							<div class="menu-item">
								<a class="menu-link " href="../beranda.php">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Beranda</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
												<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Data Master</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link " href="index.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Obat</span>
											</a>
											<a class="menu-link " href="wilKerKaper.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Pegawai</span>
											</a>
											<a class="menu-link " href="level.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Informasi Obat</span>
											</a>
											<a class="menu-link " href="level.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Informasi Member</span>
											</a>
										</div>
									</div>
								</div>


							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black" />
												<path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black" />
												<path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Rekap Pembelian</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="../transaksi">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pembelian</span>
											</a>
											<a class="menu-link" href="../transaksi/penempatan.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Rekap Pembelian</span>
											</a>
										</div>
									</div>
								</div>


							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M15 8.40002H1C0.4 8.40002 0 8.00002 0 7.40002C0 6.80002 0.4 6.40002 1 6.40002H15C15.6 6.40002 16 6.80002 16 7.40002C16 8.00002 15.6 8.40002 15 8.40002ZM16 12.4C16 11.8 15.6 11.4 15 11.4H1C0.4 11.4 0 11.8 0 12.4C0 13 0.4 13.4 1 13.4H15C15.6 13.4 16 13 16 12.4ZM12 17.4C12 16.8 11.6 16.4 11 16.4H1C0.4 16.4 0 16.8 0 17.4C0 18 0.4 18.4 1 18.4H11C11.6 18.4 12 18 12 17.4Z" fill="currentColor"/>
												<path d="M12 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V2.40002C0 3.00002 0.4 3.40002 1 3.40002H12C12.6 3.40002 13 3.00002 13 2.40002V1.40002C13 0.800024 12.6 0.400024 12 0.400024Z" fill="currentColor"/>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Pengelolaan Chat</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="../transaksi">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Informasi Pegawai</span>
											</a>
											<a class="menu-link" href="../transaksi/penempatan.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Template Pesan</span>
											</a>
										</div>
									</div>
								</div>


							</div>

						</div>
						<!--end::Menu-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside menu-->

			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header header-bg">
					<!--begin::Container-->
					<div class="container-fluid">
						<!--begin::Brand-->
						<div class="header-brand me-5">
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside toggle-->
							<!--begin::Logo-->
							<a href="#">
								<img alt="Logo" src="../images/simaker2.png" class="h-55px h-lg-70px d-none d-md-block" />
								<img alt="Logo" src="../images/simaker2.png" class="h-45px d-block d-md-none" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Brand-->
						<!--begin::Topbar-->
						<div class="topbar d-flex align-items-stretch">

							<!--begin::Item-->
							<div class="d-flex align-items-center me-2 me-lg-4">
								<a href="#" class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10 position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pemberitahuan">
									<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-white">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
											<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-100 animation-blink"></span>
								</a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('dist/assets/media/misc/pattern-1.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-bold px-9 mt-10 mb-6">Pemberitahuan
											<span class="fs-8 opacity-75 ps-3">24 Pemberitahuan</span>
										</h3>
										<!--end::Title-->

									</div>
									<!--end::Heading-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
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
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																		<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
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

											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="../pemberitahuan.php" target="_blank" class="btn btn-color-gray-600 btn-active-color-primary">Lihat semua
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
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
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center me-2 me-lg-4">
								<a href="#" class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10 " data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profil">
									<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-white">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
											<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="../images/user1.PNG" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder text-hover-primary d-flex align-items-center fs-6">Anisa, S.Kom., M.Kom.
												</div>
												<div class="fw-bold text-muted text-hover-primary fs-8">199507172019032017</div>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../dataPribadi.php" class="menu-link px-5">Detail Profil</a>

									</div>
									<!--end::Menu item-->

								</div>
								<!--end::Menu-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center me-2 me-lg-4">
								<a href="../bantuan.php" target="_blank" class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bantuan">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>

							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center me-2 me-lg-4">
								<a href="../index.php" class="btn btn-success border-0 px-3 px-lg-6 btn-hover-scale me-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Keluar dari Aplikasi">Keluar</a>
							</div>
							<!--end::Item-->

						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat minima earum rerum officiis rem voluptatum, magnam quisquam, nihil facere veritatis doloremque qui, quae iusto aliquid dolores vel eos eveniet distinctio provident sapiente debitis ab? Nostrum consectetur reprehenderit sunt architecto minus atque, velit a animi, vero facere, impedit non sequi odio nihil tempora inventore cupiditate excepturi cum! Laudantium id quo labore ipsa eos totam soluta quia quas necessitatibus! Minima quas molestias similique sapiente officiis ea eligendi consectetur numquam est? Id tempora eligendi iste rem, vitae minus incidunt velit maxime a aliquid, omnis, consectetur voluptates labore earum quibusdam. Expedita aperiam, facere iusto dolorum adipisci aut, aliquid ex sit error similique doloremque, id at. Enim veniam molestias quia eaque suscipit fuga natus maxime totam recusandae ad deleniti optio esse ducimus voluptas obcaecati corrupti asperiores nihil odio, quod repellat quidem dolor neque doloremque? Beatae consequuntur quas doloremque libero quidem natus non ducimus tempore maxime a, laboriosam illum reiciendis fuga impedit hic iure error, ea dolores voluptatem. Accusamus rem voluptates asperiores, accusantium, ad nam, voluptatum illum iure ab quasi ullam commodi? Ex provident harum libero suscipit hic nihil doloribus iste recusandae quas veritatis voluptate, deserunt, iure earum quisquam nemo, dignissimos nulla voluptas laborum eos accusamus maxime magnam distinctio. Delectus deserunt perspiciatis architecto debitis saepe id et. Sequi ad voluptatem voluptas deserunt ex. Iure placeat itaque quo veritatis pariatur commodi iusto rem maxime sit adipisci reiciendis illo nesciunt inventore eius necessitatibus, vel cum ullam voluptates unde aut? Rerum doloremque nesciunt necessitatibus quidem beatae fugit libero quasi dolor dolore dolores perferendis, vero laborum expedita ab recusandae quis reiciendis repudiandae, cum voluptatem minima. Natus quibusdam, eaque eius velit iure, asperiores dolore libero soluta porro itaque aliquid quidem sunt odio officiis laudantium? Temporibus, voluptates quos repellendus magnam eos culpa in, et error fuga, esse qui. Unde fuga eius nostrum exercitationem commodi natus molestias quibusdam facere? Facilis eos illo exercitationem dolorem laudantium commodi odio, in animi laborum eveniet. Officiis totam unde minima vitae. Animi fuga architecto consequatur pariatur quas maiores et blanditiis. Soluta fugiat nemo, inventore reiciendis alias deserunt recusandae, laudantium est enim, commodi dolorem mollitia reprehenderit facilis omnis cupiditate excepturi rem porro id et. Commodi, assumenda dicta quis non quia mollitia rem exercitationem nihil quam earum fugit sint nostrum labore recusandae enim dolores? Nemo adipisci, sint at, voluptate earum, asperiores animi vitae quaerat optio eum placeat obcaecati quasi expedita enim quod! Enim minima ea pariatur quae corrupti fugit deleniti.
					</p>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright ITKI RSDS-->
						<div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
							<div class="text-dark-50 font-size-lg font-weight-bolder" style="margin: 0 auto;">
								<span class="mr-1"><strong>&#169;2023</strong></span> ApotekAI,
								<a href="" target="_blank" class="text-dark-75 text-hover-primary">D4 Teknik Informatika</a>
							</div>
						</div>
						<!--end::Copyright ITKI RSDS-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->

	<!--end::Main-->
	<script>
		var hostUrl = "dist/assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/dist/assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/dist/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="assets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/dist/assets/js/custom/widgets.js"></script>
	<script src="assets/dist/assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/dist/assets/js/custom/modals/create-app.js"></script>
	<script src="assets/dist/assets/js/custom/modals/upgrade-plan.js"></script>
	<!--end::Page Custom Javascript-->
	<script>
		const button = document.getElementById('sa_tambah');

		button.addEventListener('click', e => {
			e.preventDefault();

			Swal.fire({
				text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
				icon: "success",
				buttonsStyling: false,
				confirmButtonText: "Selesai",
				customClass: {
					confirmButton: "btn btn-success"
				}
			}).then(function(result) {
				window.location.reload(); // Submit form

			});
		});
	</script>
	<script>
		const button2 = document.getElementById('sa_ubah');

		button2.addEventListener('click', e2 => {
			e2.preventDefault();

			Swal.fire({
				text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
				icon: "success",
				buttonsStyling: false,
				confirmButtonText: "Selesai",
				customClass: {
					confirmButton: "btn btn-success"
				}
			}).then(function(result) {
				window.location.reload(); // Submit form

			});
		});
	</script>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>