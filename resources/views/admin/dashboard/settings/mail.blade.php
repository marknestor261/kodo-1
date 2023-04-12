@extends('admin.layouts.settings-layout')

@section('content')
	<!-- begin of mail -->
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Setup SMTP</h3>
										</div>
										
										<div class="card-body p-0 project-edit-main">
											<!--  -->
											<div class="row p-5 border-bottom">
												<!--  -->
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">SMTP host </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">SMTP username </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">SMTP password </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">SMTP port </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">SMTP encryption </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">From Name </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
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
										</div>
									</div>
									<!-- end of mail -->
@endsection