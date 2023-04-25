@extends('admin.layouts.master')

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
						<h1 class="page-title">Failed Transactions </h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
							<li class="breadcrumb-item active" aria-current="page">Failed Transactions</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->

                 <!-- ROW-4 -->
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="card product-sales-main">
									<div class="card-header border-bottom">
										<h3 class="card-title mb-0">Failed Transactions</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="data-table" class="table text-nowrap mb-0 table-bordered">
												<thead class="table-head">
													<tr>
														<th class="bg-transparent border-bottom-0 wp-15">User</th>
														<th class="bg-transparent border-bottom-0">Plan</th>
														<th class="bg-transparent border-bottom-0">Amount</th>
														<th class="bg-transparent border-bottom-0">End Date</th>
														<th class="bg-transparent border-bottom-0">Method</th>
														<th class="bg-transparent border-bottom-0 no-btn">Transaction Time</th>
													</tr>
												</thead>
												<tbody class="table-body">
													@foreach ($data as $x)
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="user-details ms-2">
																		<h6 class="mb-0">{{ $x->user_name }}</h6>
																		<span class="text-muted fs-12">{{ $x->user_email }}</span>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark">
																{{ $x->plan_interval }}</a></td>
																<td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark">
																	UGX {{ $x->amount }}</a></td>
															<td class="text-danger fs-14 fw-semibold">{{ $x->end_at }}</td>
															<td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark">
																@if($x->method == 'mtn')
																{{ 'MTN Mobile Money' }}
																@elseif($x->method == 'airtel')
																{{ 'Airtel Money' }}
																@else
																{{ 'Card' }}
																@endif
																</a></td>
															<td class="text-danger fs-14 fw-semibold">{{ $x->created_at }}</td>
														</tr>
													@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 END -->
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
