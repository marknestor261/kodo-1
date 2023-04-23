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
						<h1 class="page-title">Banned Jobs </h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item">Apps</li>
							<li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li> -->
							<li class="breadcrumb-item active" aria-current="page">Banned</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->
                
				<!-- ROW-1 OPEN -->
				<div class="row">
                    
                    @foreach ($programs as $x)
                        @include('user.components.job', ['x' => $x])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush
