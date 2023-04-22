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
						<h1 class="page-title">Edit Job</h1>
					</div>
					<div class="ms-auto pageheader-btn">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Admin</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit</li>
						</ol>
					</div>
				</div>
				<!-- PAGE-HEADER END -->

                <!--ROW OPENED-->
				<div class="row">
					<div class="col-lg-12 col-md-12">
                        <form method="POST" action="{{ route('admin.edit.job', ['job_id' => $x->id] ) }}">
                            @csrf
                            <div  class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="mb-0">Update Details</h4>
                                </div>
                                <div class="card-body p-0 create-project-main">
                                    <div class="row p-5 border-bottom">
                                        <div class="col-sm-12 col-md-12 col-xl-12">
                                            <div class="form-group">
                                                <label for="project-name" class="form-label text-muted"> Title:</label>
                                                <div class="input-group">
                                                    <input id="project-name" type="text" name="title" value="{{ $x->title }}" class="form-control text-dark" placeholder="Enter title">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-12 col-md-12 col-xl-3 end-date-container">
                                            <div class="form-group">
                                                <label for="project-end-date" class="form-label text-muted">Deadline: {{ $x->deadline }}</label>
                                                <div id="pe-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
                                                    <input id="project-end-date" name="deadline" class="form-control" value="{{ $x->deadline }}" type="text" placeholder="Select Deadline"/>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-sm-12 col-md-12 col-xl-3">
                                            <div class="form-group">
                                                <label for="project-name" class="form-label text-muted">Award:</label>
                                                <div class="input-group">
                                                    <input id="project-name" type="text" name="award" value="{{ $x->award }}" required class="form-control text-dark" placeholder="Enter award value">
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-sm-12 col-md-12 col-xl-12">
                                            <div class="form-group">
                                                <label for="project-name" class="form-label text-muted"> Link:</label>
                                                <div class="input-group">
                                                    <input id="project-name" type="text" name="link" value="{{ $x->link }}" class="form-control text-dark" placeholder="Paste link here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-xl-12">
                                            <label class="form-label text-muted">About: </label>
                                            <!-- <div class="mb-3"> -->
											  <!-- <label for="validationTextarea" class="form-label">Textarea</label> -->
											  <textarea class="form-control " id="validationTextarea" placeholder="About this scholarship" name="about" rows="15" required>{{ $x->about }}</textarea>
											  <!-- <div class="invalid-feedback">
												Please enter a message in the textarea.
											  </div> -->
											<!-- </div> -->
                                        </div>
                                        {{-- <div class="col-sm-12 col-md-12 col-xl-12">
                                            <label class="form-label text-muted">Tags / Matches: </label>
                                            <div class="form-group">
                                                <ul>
                                                    <li class="select-client">
                                                        <select class="form-control select2-client-search" multiple>
                                                            <option value="1">Angeline Julliet</option>
                                                            <option value="2">Helena Rose</option>
                                                            <option value="13">Daniel Obrien</option>
                                                            <option value="15">Jorah Randy</option>
                                                            <option value="3">Emma Watson</option>
                                                            <option value="5">Bonny Benett</option>
                                                            <option value="7">Jessie Spears</option>
                                                            <option value="9">Skyler Hilda</option>
                                                            <option value="11">Randy Orton</option>
                                                            <option value="14">Benjamin Button</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row p-5">
                                        <div class="btn-list text-end">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fe fe-check-circle"></i>
                                                Save
                                            </button>
                                            <!-- <a href="javascript:history.back()">
                                                <button class="btn btn-outline-danger">
                                                    <i class="fe fe-x-circle"></i>
                                                    Cancel
                                                </button>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
