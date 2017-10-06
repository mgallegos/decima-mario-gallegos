//When a row is clicked the edit and delete button will be enabled.
function onSelectRowEvent(rowid, status, e)
{
  //"btn-group-2" is the "ID" of the second button group.
  //The "enableButtonGroup" is a custom helper function, its definition
  //can be foound in the public/assets/tutorial/js/helpers.js script.
  $('#btn-group-2').enableButtonGroup();
}
