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
									<h1 class="page-title">Edit Scholarships</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<!-- <li class="breadcrumb-item">Apps</li> -->
										<li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Scholarships</li>
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
											
											<!-- how-to -->
											@include('admin.include.how-to')
											@include('admin.include.how-to')
											@include('admin.include.how-to')
										
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
