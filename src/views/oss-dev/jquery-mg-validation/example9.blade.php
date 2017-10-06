&lt;script type='text/javascript'>
  $('#validate').click(function()
  {
    if($('#form5').jqMgVal('isFormValid'))
    {
      $('#validate').html('Click to validate: Form is valid');
      $('#validate').removeClass('btn-default btn-danger').addClass('btn-success');
    }
    else
    {
      $('#validate').html('Click to validate: Form is invalid');
      $('#validate').removeClass('btn-default btn-success').addClass('btn-danger');
    }
  });
&lt;/script>
