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
						<h1 class="page-title">Published Jobs </h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
							<li class="breadcrumb-item active" aria-current="page">Published</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->
                
				<!-- ROW-1 OPEN -->
				<div class="row">
                    
                    @foreach ($programs as $x)
                        @include('admin.components.job', ['x' => $x])
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
