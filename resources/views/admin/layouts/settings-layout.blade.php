@extends('admin.layouts.master')

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
									<h1 class="page-title">Settings</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Admin</a></li>
										<li class="breadcrumb-item active" aria-current="page">Settings</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-4 col-xl-3">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Settings</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light {{ Request::path() ==  'admin/settings' ? 'active' : ''  }}" href={{ route('admin.settings.general') }}><i class="fe fe-server me-2"></i> General</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light {{ Request::path() ==  'admin/settings/auth' ? 'active' : ''  }" href={{ route('admin.settings.auth') }}><i class="fa fa-user-o me-2"></i> Authentication</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light {{ Request::path() ==  'admin/settings/mail' ? 'active' : ''  }" href={{ route('admin.settings.mail') }}><i class="fa fa-envelope-o me-2"></i> Mail</a>
												</li>
											
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light {{ Request::path() ==  'admin/settings/payment' ? 'active' : ''  }" href={{ route('admin.settings.payment') }}><i class="fa fa-credit-card me-2"></i> Payment</a>
												</li>
											
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9">
								
									<!-- here -->
									@yield('content')
								</div>
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
