@extends('admin.layouts.master', ['create' => true])

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
									<h1 class="page-title">Edit Testimonials</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Admin</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Testimonials</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Our Programs Section</h4>
										</div>
										<div class="card-body p-0 project-edit-main">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Title </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Subtitle </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
														</div>
													</div>
												</div>

														<div class="card-header border-bottom">
															<h4 class="mb-0">Feedback section</h4>
														</div>
																<div class="col-sm-12 col-md-12 col-xl-12">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Title </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-12">
																	<label class="form-label text-muted">Background Image (800x900): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image1" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="card-header border-bottom">
																	<h4 class="mb-0">Reviews Section</h4>
																</div>
																
																<!-- review -->
																@include('admin.include.review-edit')
																@include('admin.include.review-edit')
																@include('admin.include.review-edit')
																@include('admin.include.review-edit')

																<div class="card-header border-bottom">
																	<h4 class="mb-0">FAQ Section</h4>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Title </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
																		</div>
																	</div>
																</div>


																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Subtitle </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="">
																		</div>
																	</div>
																</div>


															<!-- faq -->
															@include('admin.include.faq-edit')
															@include('admin.include.faq-edit')
															@include('admin.include.faq-edit')
															@include('admin.include.faq-edit')
															@include('admin.include.faq-edit')
															@include('admin.include.faq-edit')

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
								</div>
							</div>
							<!--ROW CLOSED-->
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
