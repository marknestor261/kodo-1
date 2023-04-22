@extends('user.layouts.master', ['apply' => true, 'x' => $x])

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
						<h1 class="page-title">Job</h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item"></li> -->
							<li class="breadcrumb-item"><a href={{ route('dashboard') }}>Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Apply to Job</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								{{-- <div class="clearfix">
									<div class="float-start">
										<h3 class="h3 card-title mb-0">Award: <span class="award-color">$ {{ $x->award }}</span></h3>
									</div>
									<div class="float-end">
										<h3 class="h3 card-title">Deadline: <span class="award-color">{{ $x->deadline }}</span></h3>
									</div>
								</div>
								<hr> --}}
								<div class="row" style="margin-top: 1.2rem;">
									<div class="col-lg-8 ">
										<p class="h3"  style="line-height: 1.5;">{{ $x->title ?? " " }}</p>
									</div>
									<div class="col-lg-4 text-end">
										<p class="h3">
                                        @if ($x->saved)
											<a href={{ route("user.unsave.job",[ 'job_id' => $x->id]) }}><i class="fa fa-bookmark me-2"></i></a>
                                        @else
                                            <a href={{ route("user.save.job",[ 'job_id' => $x->id]) }}><i class="fa fa-bookmark-o me-2"></i></a>
                                        @endif
                                        </p>
									</div>
								</div>
								<div class="row" style="margin-top: 2rem; margin-bottom: 2rem;">
									<div class="col-md-12 mb-2">
                                        @if ($x->can_apply)
										    <button type="button" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="javascript:void(0)" class="btn btn-primary btn-lg btn-block mb-1">Apply</button>
                                        @else
										    <button type="button" href="javascript:void(0)" class="btn btn-primary btn-lg btn-block mb-1" disabled>Apply</button>
                                        @endif
									</div>
								</div>
								<div class="clearfix" style="margin-top: 1.2rem; margin-bottom: 1rem;">
									<div class="float-start">
										<h3 class="h3 card-title mb-0 award-color">About </h3>
									</div>
								</div>
								<div class="row">
									<p class=" h4 font-w600 mb-1" style="line-height: 1.5;">{{ $x->about ?? " " }}</p>
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
