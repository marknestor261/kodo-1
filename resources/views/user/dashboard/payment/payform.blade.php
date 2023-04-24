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
						<h1 class="page-title">Enter payment details </h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item">Apps</li> -->
							<li class="breadcrumb-item"><a href={{ route('dashboard') }}>Dashboard</a></li> 
							<li class="breadcrumb-item active" aria-current="page">Payment Details</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->
               <!--Row -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Basic Wizard With Validation
											</div>
										</div>
										<div class="card-body">
											<div id="wizard2">
												<h4>Personal Information</h4>
												<div>
													<div class="row ">
														<div class="col-md-5 col-lg-4">
															<label class="form-control-label" for="firstname">Firstname: <span class="tx-danger">*</span></label>
															<input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required type="text">
														</div>
														<div class="col-md-5 col-lg-4">
															<label class="form-control-label" for="lastname">Lastname: <span class="tx-danger">*</span></label>
															<input class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required type="text">
														</div>
													</div>
												</div>
												<h4>Billing Information</h4>
												<div>
													<p>Wonderful transition effects.</p>
													<div class="form-group">
														<label class="form-control-label" for="email">Email: <span class="tx-danger">*</span></label>
														<input class="form-control" id="email" name="email" placeholder="Enter email address" type="email" required>
													</div>
												</div>
												<h4>Payment Details</h4>
												<div>
													<div class="form-group">
														<label class="form-label" for="name11">Card Holder Name</label>
														<input type="text" class="form-control" id="name11" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label" for="cardno2">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" id="cardno2" placeholder="Search for...">
															<span class="input-group-text btn btn-info text-white shadow-none">
																<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group">
																<label class="form-label" for="expdate3">Expiration</label>
																<div class="input-group">
																	<input type="number" class="form-control" id="expdate3" placeholder="MM" name="expiremonth">
																	<input type="number" class="form-control" id="expdate31" placeholder="YYYY" name="expireyear">
																</div>
															</div>
														</div>
														<div class="col-sm-4 ">
															<div class="form-group mb-0">
																<label class="form-label" for="cvv2">CVV <i class="fa fa-question-circle"></i></label>
																<input type="number" class="form-control" id="cvv2" required>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/Row-->
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
