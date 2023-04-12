@extends('admin.layouts.settings-layout')

@section('content')
		<!-- begin general -->
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Web App Settings</h3>
										</div>
										
										<div class="card-body p-0 project-edit-main">
											<!--  -->
											<div class="row p-5 border-bottom">
												<!--  -->
												<div class="col-sm-12 col-md-12 col-xl-12">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Site Name </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Contact Phone </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Contact Email </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>

												<div>
													<div class="form-group">
														<label class="form-label text-muted" for="default-dropdown">Delete unpublished scholarships after:</label>
														<select name="country" class="form-control form-select" id="default-dropdown" data-bs-placeholder="Select Country">
															<option label="Choose one" disabled></option>
															<option value="br">3 days</option>
															<option value="cz">10 days</option>
															<option value="de">30 days</option>
															<option value="pl">60 days</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 p-2">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1">
																	<i class="fa fa-credit-card"></i>
																</div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Payment Plans</p>
																	<p class="text-13 text-muted mb-0">Enable payment plans; if false all scholarships will be available for free</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<!-- <a href="#" class="text-14 mb-0 text-dark">Go to Settings</a> -->
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Enable Plans</a>
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
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-grid"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Publish</p>
																	<p class="text-13 text-muted mb-0">Newly created Scholarships will be published automatically.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<!-- <a href="#" class="text-14 mb-0 text-dark">Go to Settings</a> -->
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Publish new</a>
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
									<!-- end of general -->
@endsection