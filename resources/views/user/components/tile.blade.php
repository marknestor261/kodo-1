<!-- working tile -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
    <div class="card">
        <div class="card-body p-0">
            <div class="options-inv">
                <a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-start">
                    @if ($x->saved)
                    <a class="dropdown-item" href={{ route("user.unsave",[ 'program_id' => $x->id]) }}><i class="fa fa-bookmark me-2"></i> Saved</a>
                    @else
                    <a class="dropdown-item" href={{ route("user.save",[ 'program_id' => $x->id]) }}><i class="fe fe-bookmark me-2"></i> Save</a>
                    @endif

                    @if($x->banned)
                    <a class="dropdown-item" href={{ route("user.unban",[ 'program_id' => $x->id]) }}><i class="fe fe-slash me-2"></i> Banned</a>
                    @else
                    <a class="dropdown-item" href={{ route("user.ban",[ 'program_id' => $x->id]) }}><i class="fe fe-slash me-2"></i> Ban</a>
                    @endif
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
                
                <div>
                    <span class="text-center text-muted d-block">Status</span>
                    @if ($x->applied)
                    <p class="mb-0 mt-1 badge rounded-pill bg-success-transparent text-success">Applied</p>
                    @else
                    <p class="mb-0 mt-1 badge rounded-pill bg-warning-transparent text-warning">Not Applied</p>
                    @endif
                </div>
                <div class="text-end">
                    <h6 class="text-muted">Amount</h6>
                    <h4 class="mb-0">{{ '$ '.$x->award }}</h4>
                </div>
                <div>
                    <a href={{ route('user.scholarship', ['program_id' => $x->id]) }} class="btn btn-info">Apply</a>
                    <!-- <a href="javascript:void(0)" class="btn btn-dark">Upgrade</a> -->
                </div>
            </div>
            <hr class="mt-0 mb-0">
            <div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
                <div class="d-flex align-items-center">
                    <div class="me-2">
                        <!-- <img alt="User Avatar" class="rounded-circle avatar-lg" src={{ asset("assets/images/users/unlock.png") }}> -->
                        <img alt="User Avatar" class="rounded-circle avatar-lg" src={{ asset("assets/images/users/lock.png") }}>
                    </div>
                    <div>
                        <h6 class="mb-1 d-inline-block text-truncate" style="max-width: 130px;">{{ $x->title }}</h6>
                        <!-- <span class="text-muted fs-13">invoice@spruko.com tttuuyb hgtfygytftfy </span> -->
                    </div>
                </div>
                <div>
                    <span class="text-muted d-block">Deadline</span>
                    <p class="mb-0 mt-0">{{ $x->deadline }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end working tile -->