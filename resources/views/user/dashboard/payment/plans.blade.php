@extends('user.layouts.master')

@push('plugin-styles')

@endpush

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
		<div class="side-app">
			<!-- CONTAINER -->
			<div class="main-container container-fluid">
                 <!-- PAGE-HEADER -->
				<div class="page-header">
					<div>
						<h1 class="page-title">Payment Plans </h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item">Apps</li>-->
							<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> 
							<li class="breadcrumb-item active" aria-current="page">Payment</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->

                	<!-- Pricing -->
							<div class="section pb-7" id="features">
								<div class="container px-5 px-md-0">
									<div class="row text-center">
										<div class="col-lg-12 ps-3">
											<h3 class="header-family">Pricing details</h3>
											<p class="text-default sub-text">Select the best plan that suits your personal or business needs. </p>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="pricing-tabs">
												<div class="pri-tabs-heading text-center">
													<ul class="nav nav-price">
														<li><a data-bs-toggle="tab" href="#month">Monthly</a></li>
														<li><a class="active show" data-bs-toggle="tab" href="#year">Annual</a></li>
													</ul>
												</div>
												<div class="tab-content">
													<div class="tab-pane pb-0 active show" id="year">
														<div class="row d-flex align-items-center justify-content-center">
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 pricing-card">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1">Basic</p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">0</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-warning font-weight-">Billed monthly on
																			regular basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 2 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>3 </strong>
																				One-Click Apps</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 1 </strong>
																				Databases</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Unlimited </strong>
																				Cloud Storage</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-outline-warning btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 pricing-card">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1">Regular</p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">699</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-info font-weight-">Billed monthly on regular
																			basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 1 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>4 </strong>
																				One-Click Apps</li>
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 2 </strong>
																				Databases</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Unlimited </strong>
																				Cloud Storage</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-outline-info btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 border-primary pricing-card advanced">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1 pe-0">Advanced<span
																				class="float-end badge bg-primary text-white text-12-f pt-3">Limited
																				Deal</span></p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">1,299</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-2">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-primary font-weight-">Billed monthly on
																			regular basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 5 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>5 </strong>
																				One-Click Apps</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 3 </strong>
																				Databases</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> Unlimited
																				</strong> Cloud Storage</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-primary text-white btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="month">
														<div class="row d-flex align-items-center justify-content-center">
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 pricing-card">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1">Basic</p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">0</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-warning font-weight-">Billed monthly on
																			regular basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 2 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>3 </strong>
																				One-Click Apps</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 1 </strong>
																				Databases</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Unlimited </strong>
																				Cloud Storage</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-outline-warning btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 pricing-card">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1">Regular</p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">79</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-info font-weight-">Billed monthly on regular
																			basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 1 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>4 </strong>
																				One-Click Apps</li>
																			<li class="mb-4"><span
																					class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 2 </strong>
																				Databases</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Unlimited </strong>
																				Cloud Storage</li>
																			<li class="mb-4 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6 text-muted"><span
																					class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
																						class="fa fa-times"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-outline-info btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-sm-8">
																<div class="card p-3 border-primary pricing-card advanced">
																	<div class="card-header d-block text-justified pt-2">
																		<p class="text-18 font-weight-semibold mb-1 pe-0">Advanced<span
																				class="float-end badge bg-primary text-white">Limited
																				Deal</span></p>
																		<p class="text-justify font-weight-semibold mb-1"> <span
																				class="text-30 me-2">$</span><span
																				class="text-30 me-1">129</span><span class="text-24"><span
																					class="op-0-5 text-muted text-20">/</span> month</span></p>
																		<p class="text-13 mb-2">Lorem ipsum dolor sit amet consectetur
																			adipisicing elit. Iure quos debitis aliquam .</p>
																		<p class="text-13 mb-1 text-primary font-weight-">Billed monthly on
																			regular basis!</p>
																	</div>
																	<div class="card-body pt-2">
																		<ul class="text-justify pricing-body ps-0">
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 5 Free</strong>
																				Domain Name</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong>5 </strong>
																				One-Click Apps</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 3 </strong>
																				Databases</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> Unlimited
																				</strong> Cloud Storage</li>
																			<li class="mb-4"><span
																					class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> Money </strong>
																				BackGuarantee</li>
																			<li class="mb-6"><span
																					class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
																						class="fa fa-check"></i></span> <strong> 24/7</strong>
																				support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center border-top-0 pt-1">
																		<button class="btn btn-lg btn-primary text-white btn-block">
																			<span class="ms-4 me-4">Select</span>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Pricing close -->
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
