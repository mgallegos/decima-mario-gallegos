$(document).ready(function()
{
  //Attach Bootstrap tooltips to all toolbar buttons
  $('.tutorial-tooltip').tooltip();

  //Adding form validation usign the jQuery MG Validation Plugin.
  $('#book-form').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'col-sm-10'});

  //Binds onClick event to the "New" button.
  $('#btn-new').click(function()
  {
    //Disables all buttons within the toolbar.
    //The "disabledButtonGroup" is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    $('#btn-toolbar').disabledButtonGroup();
    //Enables the third button group (save and close).
    //The "enabledButtonGroup" is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    $('#btn-group-3').enableButtonGroup();
    //Shows the form title.
    $('#form-new-title').removeClass('hidden');
    //Manually hide the tooltips (fix for firefox).
    $('.tooltip').tooltip('hide');
    //This is a bootstrap javascript effect to hide the grid.
    $('#grid-section').collapse('hide');
  });

  //Binds onClick event to the "Refresh" button.
  $('#btn-refresh').click(function()
  {
    //When toolbar is enabled, this method should be use to clean the toolbar and refresh the grid.
    $('#BookGrid')[0].clearToolbar();
    //Disables all buttons within the toolbar
    $('#btn-toolbar').disabledButtonGroup();
    //Enables the first button group (new, refresh and export)
    $('#btn-group-1').enableButtonGroup();
  });

  //Binds onClick event to the "xls" button.
  $('#export-xls').click(function()
  {
    //Triggers the grid XLS export functionality.
    $('#BookGridXlsButton').click();
  });

  //Binds onClick event to the "csv" button.
  $('#export-csv').click(function()
  {
    //Triggers the grid CSV export functionality.
    $('#BookGridCsvButton').click();
  });

  //Bind onClick event to the "Edit" button.
  $('#btn-edit').click(function()
  {
    //Gets the selected row id.
    rowid = $('#BookGrid').jqGrid('getGridParam', 'selrow');
    //Gets an object with the selected row data.
    rowdata = $('#BookGrid').getRowData(rowid);
    //Fills out the form with the selected row data (the id of the
    //object must match the id of the form elements).
    //This is a custom helper function, its definition
    //can be foound in the public/assets/tutorial/js/helpers.js script.
    populateFormFields(rowdata, '');
    //Disables all buttons within the toolbar.
    $('#btn-toolbar').disabledButtonGroup();
    //Enables the third button group (save and close).
    $('#btn-group-3').enableButtonGroup();
    //Shows the form title.
    $('#form-edit-title').removeClass('hidden');
    //Manually hide the tooltips (fix for firefox).
    $('.tooltip').tooltip('hide');
    //This is a bootstrap javascript effect to hide the grid.
    $('#grid-section').collapse('hide');
  });

  //Bind onClick event to the "Delete" button.
  $('#btn-delete').click(function()
  {
    //Gets the selected row id
    rowid = $('#BookGrid').jqGrid('getGridParam', 'selrow');
    //Gets an object with the selected row data
    rowdata = $('#BookGrid').getRowData(rowid);

    //Sends an Ajax request to the server.
    $.ajax(
    {
      type: 'POST',
      data: JSON.stringify({'id':rowdata['id']}),
      dataType : 'json',
      url: $('#book-form').attr('action') + '/delete',
      error: function (jqXHR, textStatus, errorThrown)
      {
        $('#app-loader').addClass('hidden');
        $('#main-panel-fieldset').removeAttr('disabled');
        alert('Something went wrong, please try again later.');
      },
      beforeSend:function()
      {
        $('#app-loader').removeClass('hidden');
        $('#main-panel-fieldset').attr('disabled','disabled');
      },
      success:function(json)
      {
        if(json.success)
        {
          //Shows a message after an element.
          //This is a custom helper function, its definition
          //can be foound in the public/assets/tutorial/js/helpers.js script.
          $('#btn-toolbar').showAlertAfterElement('alert-success alert-custom', json.message, 5000);
        }
        else
        {
          $('#btn-toolbar').showAlertAfterElement('alert-danger alert-custom', json.message, 5000);
        }

        //Triggers the "Refresh" button funcionality.
        $('#btn-refresh').click();
        $('#app-loader').addClass('hidden');
        $('#main-panel-fieldset').removeAttr('disabled');
      }
    });

  });

  //Bind onClick event to the "Save" button.
  $('#btn-save').click(function()
  {
    var url = $('#book-form').attr('action');

    //Check is the form is valid usign the jQuery MG Validation Plugin.
    if(!$('#book-form').jqMgVal('isFormValid'))
    {
      return;
    }

    if($('#id').isEmpty())
    {
      url += '/new';
    }
    else
    {
      url += '/edit';
    }

    //Send an Ajax request to the server.
    $.ajax(
    {
      type: 'POST',
      //Creates an object from form fields.
      //The "formToObject" is a custom helper function, its definition
      //can be foound in the public/assets/tutorial/js/helpers.js script.
      data: JSON.stringify($('#book-form').formToObject('')),
      dataType : 'json',
      url: url,
      error: function (jqXHR, textStatus, errorThrown)
      {
        $('#app-loader').addClass('hidden');
        $('#main-panel-fieldset').removeAttr('disabled');
        alert('Something went wrong, please try again later.');
      },
      beforeSend:function()
      {
        $('#app-loader').removeClass('hidden');
        $('#main-panel-fieldset').attr('disabled','disabled');
      },
      success:function(json)
      {
        if(json.success)
        {
          $('#btn-toolbar').showAlertAfterElement('alert-success alert-custom', json.message, 5000);
        }
        else
        {
          $('#btn-toolbar').showAlertAfterElement('alert-danger alert-custom', json.message, 5000);
        }

        //Triggers the "Close" button funcionality.
        $('#btn-close').click();
        $('#app-loader').addClass('hidden');
        $('#main-panel-fieldset').removeAttr('disabled');
      }
    });
  });

  //Bind onClick event to the "Close" button.
  $('#btn-close').click(function()
  {
    //Disables all buttons within the toolbar.
    $('#btn-toolbar').disabledButtonGroup();
    //Enables the fisrt button group (new, refresh and export).
    $('#btn-group-1').enableButtonGroup();
    //Hides the form titles
    $('#form-new-title').addClass('hidden');
    $('#form-edit-title').addClass('hidden');
    //Manually hide the tooltips (fix for firefox).
    $('.tooltip').tooltip('hide');
    //Cleans the form usign the jQuery MG Validation Plugin.
    $('#book-form').jqMgVal('clearForm');
    //Triggers the "Refresh" button funcionality.
    $('#btn-refresh').click();
    //This is a bootstrap javascript effect to hide the grid.
    $('#form-section').collapse('hide');
  });

  //This is a bootstrap javascript event that allows you to do
  //something when the element is hidden.
  $('#grid-section').on('hidden.bs.collapse', function ()
  {
    //Shows the form.
    //This is a bootstrap javascript effect
    $('#form-section').collapse('show');
    //Focus on the name form field
    $('#name').focus();
  });

  $('#form-section').on('hidden.bs.collapse', function ()
  {
    //Shows the grid.
    $('#grid-section').collapse('show');
  });

  //Binds focusOut event to the "ASIN" field.
  $('#asin').focusout(function()
  {
    //Focus on the "Save" button.
    $('#btn-save').focus();
  });
});
