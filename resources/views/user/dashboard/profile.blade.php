@extends('user.layouts.master')

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
						<h1 class="page-title">Profile</h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href={{ route('dashboard') }}>Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
				<div class="row" id="user-profile">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-lg-12 col-md-12 col-xl-6">
										<div class="d-flex flex-wrap align-items-center">
											<div class="profile-img-main rounded">
												<img src={{ asset("assets/images/faces/6.jpg") }} alt="img" class="m-0 p-1 rounded hrem-6">
											</div>
											<div class="ms-4">
												<h4>{{ $metadata->first_name }} {{ $metadata->last_name }}</h4>
												<p class="text-muted mb-2">{{ $user->email }}</p>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-xl-6">
										<div class="d-md-flex flex-wrap justify-content-lg-end">
											<div class="media m-3">
												<div class="media-icon bg-primary me-3 mt-1">
													<i class="fa fa-compass fs-20 text-white"></i>
												</div>
												<div class="media-body">
													<span class="text-muted">Matched</span>
													<div class="fw-semibold fs-25">
														{{ $stats['matched'] }}
													</div>
												</div>
											</div>
											<div class="media m-3">
												<div class="media-icon bg-info me-3 mt-1">
													<i class="fa fa-paper-plane fs-20 text-white"></i>
												</div>
												<div class="media-body">
													<span class="text-muted">Applied</span>
													<div class="fw-semibold fs-25">
                                                    {{ $stats['applied'] }}
													</div>
												</div>
											</div>
											<div class="media m-3">
												<div class="media-icon bg-warning me-3 mt-1">
													<i class="fa fa-bookmark fs-20 text-white"></i>
												</div>
												<div class="media-body">
													<span class="text-muted">Favorites</span>
													<div class="fw-semibold fs-25">
                                                    {{ $stats['saved'] }}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-top">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li><a href="#profileMain" class="active show" data-bs-toggle="tab">Profile</a></li>
												<li><a href="#accountSettings" data-bs-toggle="tab">Account Settings</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane active show" id="profileMain">
								<div class="card">
									<div class="card-body p-0">
									
										<div class="table-responsive p-5">
											<h3 class="card-title">Personal Info</h3>
											<table class="table row table-borderless">
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><strong>First Name :</strong> {{ $metadata->first_name }}</td>
													</tr>
													<tr>
														<td><strong>Location :</strong>{{ $metadata->city }}, {{ $metadata->country }}</td>
													</tr>
												</tbody>
												<tbody class="col-lg-12 col-xl-6 p-0 border-top-0">
													<tr>
														<td><strong>Last Name :</strong> {{ $metadata->last_name }} </td>
													</tr>
													<tr>
														<td><strong>Email :</strong> {{ $user->email }}</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="border-top"></div>
										<div class="p-5">
											<h3 class="card-title">Statistics</h3>
											<div class="profile-cover__info ms-4 ms-auto p-0">
												<ul class="nav p-0 border-bottom-0 mb-0">
													<li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center my-1">
														<span class="border-0 mb-0 pb-0 fs-21">{{ $stats['matched'] }}</span>
														Matched
													</li>
													<li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center mx-2 my-1">
														<span class="border-0 mb-0 pb-0 fs-21">{{ $stats['applied'] }}</span>
														Applied
													</li>
													<li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center my-1">
														<span class="border-0 mb-0 pb-0 fs-21">{{ $stats['saved'] }}</span>
														Favorites
													</li>
												</ul>
											</div>
										</div>
										<div class="border-top"></div>
										
									</div>
								</div>
							</div>
							
							<div class="tab-pane" id="accountSettings">
								<div class="card">
									<div class="card-body">
										<form class="form-horizontal" data-select2-id="11">
											<div class="mb-4 main-content-label">Account</div>
											<div class="form-group ">
												<div class="row row-sm">
													<div class="col-md-3">
														<label for="userName" class="form-label">First Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" id="userName" placeholder="First Name" value={{ $metadata->first_name }}>
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row row-sm">
													<div class="col-md-3">
														<label for="userName" class="form-label">Last Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" id="userName" placeholder="Last Name" value={{ $metadata->last_name }}>
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row row-sm">
													<div class="col-md-12">
														<a class="btn btn-primary my-1 float-end" href="#">Update</a>
													</div>
												</div>
											</div>
											<div class="mb-4 main-content-label">Change Password</div>
											<div class="form-group ">
												<div class="row row-sm">
													<div class="col-md-3">
														<label for="userName" class="form-label">Current Password</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" id="userName" placeholder="Enter Password" value="">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row row-sm">
													<div class="col-md-3">
														<label for="userName" class="form-label">New Password</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" id="userName" placeholder="New Password" value="">
													</div>
												</div>
											</div>
											
											<div class="form-group float-end">
												<div class="row row-sm">
													<div class="col-md-12">
														<a class="btn btn-primary my-1" href="#">Change Password</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- ROW-1 CLOSED -->
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
