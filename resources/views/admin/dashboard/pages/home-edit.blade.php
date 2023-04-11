@extends('admin.layouts.master', ["create" => true])

@push('plugin-styles')

@endpush

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
		<div class="side-app">
			<!-- CONTAINER -->
			<div class="main-container container-fluid">
                         <!-- place code here -->
                	<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Edit Home</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Admin</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Home</li>
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
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Subtitle </label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
														</div>
													</div>
												</div>

												
												
												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 1 (800x900): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>

												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 2 (800x900): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>

												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 3 (800x900): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>

												<div class="card-header border-bottom">
													<h4 class="mb-0">Mission / History Section</h4>
												</div>

														<div class="col-sm-12 col-md-12 col-xl-6">
															<div class="form-group">
																<label for="project-name" class="form-label text-muted">Mission Subtext </label>
																<div class="input-group">
																	<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-6">
															<div class="form-group">
																<label for="project-name" class="form-label text-muted">History Subtext </label>
																<div class="input-group">
																	<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																</div>
															</div>
														</div>
	
												
												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 1 (2000x1500): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>

												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 2 (2000x1500): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>

												<div class="col-sm-12 col-md-12 col-xl-4">
													<label class="form-label text-muted">Image 3 (2000x1500): </label>
													<div class="form-group">
														<form method="post">
															<input type="file" name="image1" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>


														<div class="card-header border-bottom">
															<h4 class="mb-0">Academic section</h4>
														</div>
																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Title </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-6">
																	<div class="form-group">
																		<label for="project-name" class="form-label text-muted">Subtitle </label>
																		<div class="input-group">
																			<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																		</div>
																	</div>
																</div>

																<div class="card-header border-bottom">
																	<h4 class="mb-0">Icons section</h4>
																</div>
																		<div class="col-sm-12 col-md-12 col-xl-3">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">People Figure </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">People Text </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>

																		<div class="col-sm-12 col-md-12 col-xl-3">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Thumbs-up Figure </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Thumbs-up Text </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>

																		<div class="col-sm-12 col-md-12 col-xl-3">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Degree Figure </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Degree Text </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>

																		<div class="col-sm-12 col-md-12 col-xl-3">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">World Figure </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">World Text </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>

																		<div class="card-header border-bottom">
																			<h4 class="mb-0">Career section</h4>
																		</div>

																		<div class="col-sm-12 col-md-12 col-xl-6">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Title Subtext </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>

																		<div class="col-sm-12 col-md-12 col-xl-6">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Programs Subtext </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
																				</div>
																			</div>
																		</div>


																		<div class="col-sm-12 col-md-12 col-xl-6">
																			<div class="form-group">
																				<label for="project-name" class="form-label text-muted">Opportunities Subtext </label>
																				<div class="input-group">
																					<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter text" value="">
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
