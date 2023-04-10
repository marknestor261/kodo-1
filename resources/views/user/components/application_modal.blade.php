
	<!-- APPLICATION MODAL -->
	<div class="modal fade"  id="modaldemo1">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">Away we go</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h6>Click this link to apply</h6>
					<a class="text-primary" target="_newtab" href={{ route('user.apply', ['program_id' => $x->id]) }}>
						{{ $x->link }}</a>
				</div>
				<div class="modal-footer">
					<!-- <a href={{ route('user.apply', ['program_id' => $x->id]) }}>
                        <button class="btn btn-primary" >I have Applied</button>
                    </a> -->
                        <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
				</div>
			</div>
		</div>
	</div>
    <!-- /APPLICATION MODAL -->