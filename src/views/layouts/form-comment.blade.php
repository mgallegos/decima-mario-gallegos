<div class="modal fade" id="fc-modal" tabindex="-1" role="dialog" aria-labelledby="fc-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="fc-modal-label"></h3>
      </div>
      <div class="modal-body">
        {!! Form::open(array('id' => 'form-comment', 'role' => 'form', 'class' => 'post-form', 'onsubmit' => 'return false;')) !!}
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  {!! Form::text('fc-name', null , array('id' => 'fc-name', 'class' => 'form-control', 'data-mg-required' => '', 'placeholder' => 'Name')) !!}
                  {!! Form::hidden('fc-post-id', null, array('id' => 'fc-post-id')) !!}
                  {!! Form::hidden('fc-reply-to', null, array('id' => 'fc-reply-to')) !!}
                  {!! Form::hidden('fc-kwaai', null, array('id' => 'fc-kwaai')) !!}
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope-o"></i>
                  </span>
                  {!! Form::text('fc-email', null , array('id' => 'fc-email', 'class' => 'form-control', 'data-mg-required' => '', 'placeholder' => 'Email Address (your email will not be published.)')) !!}
                </div>
              </div>
            </div>
          </div>
          <div class="form-group clearfix form-textarea">
            {!! Form::textareacustom('fc-comment', 3, 500, array('class' => 'form-control', 'data-mg-required' => '', 'placeholder' => 'Enter your comment')) !!}
          </div>
          {!! Honeypot::generate('fc-kwaai-name', 'fc-kwaai-time') !!}
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        {!! Form::button('<i class="fa fa-times-circle"></i> Cancel', array('id' => 'fc-cancel','class' => 'btn btn-danger', 'data-dismiss' => 'modal')) !!}
        {!! Form::button('<i class="fa fa-comment"></i> Post Comment', array('class' => 'btn btn-primary', 'onclick' => 'saveComment();')) !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
