<script type='text/javascript'>
  function onSelectRowEvent2(rowid, status, e)
  {
    $('#lqp-btn-group-2').enableButtonGroup();
  }
</script>
<div class="bd-callout bd-callout-info">
  <h4>Books Grid (custom form)</h4>
  <p>You can create your own custom form and use <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator" target="_blank">jqGrid methods</a> to interact with your grid. Use the buttons within the custom toolbar to:</p>
  <ul>
    <li>Add a new book.</li>
    <li>Edit selected book.</li>
    <li>Delete selected book.</li>
    <li>Refresh grid.</li>
    <li>Export data.</li>
  </ul>
</div>
<div id="lqp-btn-toolbar" class="section-header btn-toolbar" role="toolbar">
  <div id="lqp-btn-group-1" class="btn-group">
  	{!! Form::button('<i class="fa fa-plus"></i> New', array('id' => 'lqp-btn-new', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Add a new book')) !!}
  	{!! Form::button('<i class="fa fa-refresh"></i> Refresh', array('id' => 'lqp-btn-refresh', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Refresh grid data')) !!}
    <div class="btn-group" role="group">
  	   {!! Form::button('<i class="fa fa-share-square-o"></i> Export', array('id'=> 'lqp-export', 'class' => 'btn btn-default dropdown-toggle', 'data-container' => 'body', 'data-toggle' => 'dropdown')) !!}
       <div class="dropdown-menu" aria-labelledby="lqp-export">
         <a id='lqp-export-xls' class="dropdown-item fake-link"><i class="fa fa-file-excel-o"></i> xls</a>
         <a id='lqp-export-csv' class="dropdown-item fake-link"><i class="fa fa-file-text-o"></i> csv</a>
       </div>
    </div>
  </div>
  <div id="lqp-btn-group-2" class="btn-group">
  	{!! Form::button('<i class="fa fa-edit"></i> Edit', array('id' => 'lqp-btn-edit', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Edit book')) !!}
  	{!! Form::button('<i class="fa fa-minus"></i> Delete', array('id' => 'lqp-btn-delete', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Delete book')) !!}
  </div>
  <div id="lqp-btn-group-3" class="btn-group toolbar-block">
  	{!! Form::button('<i class="fa fa-save"></i> Save', array('id' => 'lqp-btn-save', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Save book')) !!}
  	{!! Form::button('<i class="fa fa-times"></i> Close', array('id' => 'lqp-btn-close', 'class' => 'btn btn-default lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Return to the grid view (data that has not been saved will be lost.)')) !!}
  </div>
</div>
<div id="lqp-grid-section" class="app-mg-grid collapse show">
{!!
GridRender::setGridId("BookGrid1")
  ->enablefilterToolbar(true, false)
  ->hideXlsExporter()
  ->hideCsvExporter()
  ->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid3'))
  ->setGridOption('rowNum', 10)
  ->setGridOption('rownumbers', true)
  ->setGridOption('width', 730)
  ->setGridOption('height', 225)
  ->setGridOption('rowList',array(10,20,30))
  ->setGridOption('caption','Books')
  ->setGridOption('viewrecords',true)
  ->setGridEvent('onSelectRow', 'onSelectRowEvent2')
  ->setGridEvent('onSelectRow', 'onBeforeRequest')
  ->addColumn(array('index' => 'id', 'hidden' => true))
  ->addColumn(array('label' => 'Name', 'index'=>'name'))
  ->addColumn(array('label' => 'Description','index' => 'description'))
  ->addColumn(array('label' => 'Author','index' => 'author'))
  ->addColumn(array('label' => 'Publisher','index' => 'publisher'))
  ->addColumn(array('label' => 'Language','index' => 'language', 'align' => 'center', 'width' => 90, 'editoptions' => array('value' => 'E:English;S:Spanish;G:German'), 'formatter' => 'select'))
  ->addColumn(array('label' => 'Print Length', 'index' => 'length', 'align' => 'center', 'width' => 90, 'formatter' => 'integer'))
  ->addColumn(array('label' => 'ASIN', 'index' => 'asin', 'align' => 'center', 'width' => 105))
  ->renderGrid()
!!}
</div>
<div id='lqp-form-section' class="collapse">
  <div class="form-container">
    {!! Form::open(array('id' => 'lqp-book-form', 'url' => URL::to('/cms/open-source-development/laravel-jqgrid'), 'role' => 'form', 'class' => 'form-horizontal', 'onsubmit' => 'return false;')) !!}
      <fieldset id="lqp-books-form-fieldset">
        <legend id="lqp-form-new-title" class="hidden-xs-up">Add a new book</legend>
				<legend id="lqp-form-edit-title" class="hidden-xs-up">Edit an existing book</legend>
        <div class="form-group row" id='test'>
  				{!! Form::label('lqp-name', 'Name', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
    				<div class="input-group">
    					<span class="input-group-addon">
    						<i class="fa fa-book"></i>
    					</span>
  		    		{!! Form::text('lqp-name', null , array('id' => 'lqp-name', 'class' => 'form-control', 'data-mg-required' => '')) !!}
  		    		{!! Form::hidden('lqp-id', null, array('id' => 'lqp-id')) !!}
  		    	</div>
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-description', 'Description', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
            {!! Form::textarea('lqp-description', null , array('id' => 'lqp-description', 'class' => 'form-control', 'rows' => 3)) !!}
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-author', 'Author', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              {!! Form::text('lqp-author', null , array('id' => 'lqp-author', 'class' => 'form-control', 'data-mg-required' => '')) !!}
            </div>
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-language', 'Language', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-language"></i>
              </span>
              {!! Form::select('lqp-language', array('E' => 'English', 'S' => 'Spanish', 'G' => 'German'), null , array('id' => 'lqp-language', 'class' => 'form-control')) !!}
            </div>
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-publisher', 'Publisher', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-briefcase"></i>
              </span>
              {!! Form::text('lqp-publisher', null , array('id' => 'lqp-publisher', 'class' => 'form-control', 'data-mg-required' => '')) !!}
            </div>
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-length', 'Print Length', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10 mg-hm">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-print"></i>
              </span>
              {!! Form::text('lqp-length', null , array('id' => 'lqp-length', 'class' => 'form-control', 'data-mg-required' => '', 'data-mg-validator' => 'positiveInteger')) !!}
            </div>
          </div>
        </div>
        <div class="form-group row">
          {!! Form::label('lqp-asin', 'ASIN', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-barcode"></i>
              </span>
              {!! Form::text('lqp-asin', null , array('id' => 'lqp-asin', 'class' => 'form-control', 'data-mg-required' => '')) !!}
            </div>
          </div>
        </div>

      </fieldset>
    {!! Form::close() !!}
  </div>
</div>
<div id="lqp-demo3-ads-1" class="hidden-lg" style="margin-top: 20px;"></div>
<div class="alert alert-warning" role="alert" style="margin-top: 20px;">
  <p><i class="fa fa-warning fa-lg"></i> Be aware that this package does NOT include create, update and delete server-side functionalities. However this can be easily accomplished by using <a href="http://laravel.com/docs/eloquent#insert-update-delete" target="_blank">Eloquent ORM.</a></p>
</div>
<div class="alert alert-info" role="alert">
  <p><i class="fa fa-info-circle fa-lg"></i> <a href="{!! URL::to('/cms/open-source-development/jquery-mg-validation/getting-started') !!}" target="_blank">jQuery MG Validation Plugin</a> is being used in this demo to validate the form.</p>
</div>
<script type='text/javascript'>

  //Binds onClick event the "New" button.
  $('#lqp-btn-new').click(function()
  {
    //Disables all buttons within the toolbar.
    //The "disabledButtonGroup" is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    $('#lqp-btn-toolbar').disabledButtonGroup();
    //Enables the third button group (save and close).
    //The "enabledButtonGroup" is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    $('#lqp-btn-group-3').enableButtonGroup();
    //Shows the form title.
    $('#lqp-form-new-title').removeClass('hidden-xs-up');
    //Manually hide the tooltips (fix for firefox).
    $('.lqp-tooltip').tooltip('hide');
    //This is a bootstrap javascript effect to hide the grid.
    $('#lqp-grid-section').collapse('hide');
  });

  //Binds onClick event the "Refresh" button.
  $('#lqp-btn-refresh').click(function()
  {
    //When toolbar is enabled, this method should be use to clean the toolbar and refresh the grid.
    $('#BookGrid1')[0].clearToolbar();
    //Disables all buttons within the toolbar
    $('#lqp-btn-toolbar').disabledButtonGroup();
    //Enables the first button group (new, refresh and export)
    $('#lqp-btn-group-1').enableButtonGroup();
  });

  //Binds onClick event the "xls" button.
  $('#lqp-export-xls').click(function()
  {
    //Triggers the grid XLS export functionality.
    $('#BookGrid1XlsButton').click();
  });

  //Binds onClick event the "csv" button.
  $('#lqp-export-csv').click(function()
  {
    //Triggers the grid CSV export functionality.
    $('#BookGrid1CsvButton').click();
  });

  //Bind onClick event the "Edit" button.
  $('#lqp-btn-edit').click(function()
  {
    //Gets the selected row id.
    rowid = $('#BookGrid1').jqGrid('getGridParam', 'selrow');
    //Gets an object with the selected row data.
    rowdata = $('#BookGrid1').getRowData(rowid);
    //Fills out the form with the selected row data (the id of the
    //object must match the id of the form elements).
    //This is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    populateFormFields(rowdata, 'lqp-');
    //Disables all buttons within the toolbar.
    $('#lqp-btn-toolbar').disabledButtonGroup();
    //Enables the third button group (save and close).
    $('#lqp-btn-group-3').enableButtonGroup();
    //Shows the form title.
    $('#lqp-form-edit-title').removeClass('hidden-xs-up');
    //Manually hide the tooltips (fix for firefox).
    $('.lqp-tooltip').tooltip('hide');
    //This is a bootstrap javascript effect to hide the grid.
    $('#lqp-grid-section').collapse('hide');
  });

  //Bind onClick event the "Delete" button.
  $('#lqp-btn-delete').click(function()
  {
    //Gets the selected row id
    rowid = $('#BookGrid1').jqGrid('getGridParam', 'selrow');
    //Gets an object with the selected row data
    rowdata = $('#BookGrid1').getRowData(rowid);

    //Sends an Ajax request to the server.
    $.ajax(
    {
      type: 'POST',
      data: JSON.stringify({'id':rowdata['id']}),
      dataType : 'json',
      url: $('#lqp-book-form').attr('action') + '/crud3',
      error: function (jqXHR, textStatus, errorThrown)
      {
        $('#app-loader').addClass('hidden-xs-up');
        $('#main-panel-fieldset').removeAttr('disabled');
        alert('Something went wrong, please try again later.');
      },
      beforeSend:function()
      {
        $('#app-loader').removeClass('hidden-xs-up');
        $('#main-panel-fieldset').attr('disabled','disabled');
      },
      success:function(json)
      {
        if(json.success)
        {
          //Shows a message after an element.
          //This is a custom helper function, its definition
          //can be foound in the public/assets/tutorial/js/helpers.js script.
          $('#lqp-btn-toolbar').showAlertAfterElement('alert-success alert-custom', json.message, 5000);

          if($('#BookGrid0').length > 0)
          {
            $('#BookGrid0')[0].clearToolbar();
          }
        }
        else
        {
          $('#lqp-btn-toolbar').showAlertAfterElement('alert-danger alert-custom', json.message, 5000);
        }

        //Triggers the "Refresh" button funcionality.
        $('#lqp-btn-refresh').click();
        $('#app-loader').addClass('hidden-xs-up');
        $('#main-panel-fieldset').removeAttr('disabled');
      }
    });

  });

  //Bind onClick event the "Save" button.
  $('#lqp-btn-save').click(function()
  {
    var url = $('#lqp-book-form').attr('action');

    //Check is the form is valid usign the jQuery MG Validation Plugin.
    if(!$('#lqp-book-form').jqMgVal('isFormValid'))
		{
			return;
		}

    if($('#lqp-id').isEmpty())
    {
      url += '/crud1';
    }
    else
    {
      url += '/crud2';
    }

    //Send an Ajax request to the server.
    $.ajax(
		{
			type: 'POST',
			data: JSON.stringify($('#lqp-book-form').formToObject('lqp-')),
			dataType : 'json',
			url: url,
			error: function (jqXHR, textStatus, errorThrown)
			{
        $('#app-loader').addClass('hidden-xs-up');
        $('#main-panel-fieldset').removeAttr('disabled');
        alert('Something went wrong, please try again later.');
      },
			beforeSend:function()
			{
				$('#app-loader').removeClass('hidden-xs-up');
				$('#main-panel-fieldset').attr('disabled','disabled');
			},
			success:function(json)
			{
        if(json.success)
        {
          $('#lqp-btn-toolbar').showAlertAfterElement('alert-success alert-custom', json.message, 5000);

          if($('#BookGrid0').length > 0)
          {
            $('#BookGrid0')[0].clearToolbar();
          }
        }
        else
        {
          $('#lqp-btn-toolbar').showAlertAfterElement('alert-danger alert-custom', json.message, 5000);
        }

        //Triggers the "Close" button funcionality.
        $('#lqp-btn-close').click();
        $('#app-loader').addClass('hidden-xs-up');
        $('#main-panel-fieldset').removeAttr('disabled');
      }
    });
  });

  //Bind onClick event the "Close" button.
  $('#lqp-btn-close').click(function()
  {
    //Disables all buttons within the toolbar.
    $('#lqp-btn-toolbar').disabledButtonGroup();
    //Enables the fisrt button group (new, refresh and export).
    $('#lqp-btn-group-1').enableButtonGroup();
    //Hides the form titles
    $('#lqp-form-new-title').addClass('hidden-xs-up');
    $('#lqp-form-edit-title').addClass('hidden-xs-up');
    //Manually hide the tooltips (fix for firefox).
    $('.lqp-tooltip').tooltip('hide');
    //Cleans the form usign the jQuery MG Validation Plugin.
    $('#lqp-book-form').jqMgVal('clearForm');
    //Triggers the "Refresh" button funcionality.
    $('#lqp-btn-refresh').click();
    //This is a bootstrap javascript effect to hide the grid.
    $('#lqp-form-section').collapse('hide');
  });

  //This is a bootstrap javascript event that allows you to do
  //something when the element is hidden.
  $('#lqp-grid-section').on('hidden.bs.collapse', function ()
	{
    //Shows the form.
    //This is a bootstrap javascript effect
		$('#lqp-form-section').collapse('show');
    //Focus on the name form field
    $('#lqp-name').focus();
	});

  $('#lqp-form-section').on('hidden.bs.collapse', function ()
  {
    //Shows the grid.
    $('#lqp-grid-section').collapse('show');
  });

  //Binds focusOut event the "ASIN" field.
  $('#lqp-asin').focusout(function()
	{
    //Focus on the "Save" button.
		$('#lqp-btn-save').focus();
	});

  //Adding form validation usign the jQuery MG Validation Plugin.
  $('#lqp-book-form').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'col-sm-10'});
</script>
