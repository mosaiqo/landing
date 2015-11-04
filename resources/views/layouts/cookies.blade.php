<div class="alert alert-warning hidden-xs hidden-sm" role="alert" id="cookies">
	<a class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</a>
	<br>
	{!!trans('page.cookies.message')!!}
</div>

<div class="modal fade bs-example-modal-sm" id="cookiesModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        	{!!trans('page.cookies.message')!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->