@extends('admin.layouts.settings-layout')

@section('content')
	<!-- authentication -->
									<div class="row">
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 p-2">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1">
																	<i class="fa fa-user-o"></i>
																</div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Disable Registration</p>
																	<p class="text-13 text-muted mb-0">Suspend creation of new accounts until this value is changed</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<!-- <a href="#" class="text-14 mb-0 text-dark">Go to Settings</a> -->
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Disable Sign up</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 p-2">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fa fa-envelope-o"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Email Verification</p>
																	<p class="text-13 text-muted mb-0">Verify emails of new accounts, this requires SMTP setup. </p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<!-- <a href="#" class="text-14 mb-0 text-dark">Go to Settings</a> -->
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Enable Verification</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row p-5">
												<div class="btn-list text-end">
													<button class="btn btn-lg btn-primary">
														<i class="fe fe-check-circle"></i>
														Save
													</button>
												</div>
											</div>
									<!-- end of authentication -->
@endsection