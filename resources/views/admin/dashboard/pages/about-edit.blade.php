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
									<h1 class="page-title">Edit About</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Admin</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit About</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

                            <!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Top Section</h4>
										</div>
										<div class="card-body p-0 project-edit-main">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Title </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Subtitle </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
														</div>
													</div>
												</div>

														<div class="col-sm-12 col-md-12 col-xl-6">
															<div class="form-group">
																<label for="project-name" class="form-label text-muted">Mission Subtext </label>
																<div class="input-group">
																	<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-6">
															<div class="form-group">
																<label for="project-name" class="form-label text-muted">Vision Subtext </label>
																<div class="input-group">
																	<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
																</div>
															</div>
														</div>


														<div class="card-header border-bottom">
															<h4 class="mb-0">Middle banner section</h4>
														</div>
																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Title </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Subtitle </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Text" value="">
																		</div>
																	</div>
																</div>

																<div class="card-header border-bottom">
																	<h4 class="mb-0">Images Section</h4>
																</div>
																
																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 1 (800x900): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image1" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 2 (2000x1500): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image2" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 3 (800x840): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image3" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 4 (900x540): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image4" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 5 (900x540): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image5" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 6 (800x840): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image6" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 7 (800x840): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image7" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>

																<div class="col-sm-12 col-md-12 col-xl-6">
																	<label class="form-label text-muted">Image 8 (800x900): </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" name="image8" class="dropify" data-bs-height="100" />
																		</form>
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
