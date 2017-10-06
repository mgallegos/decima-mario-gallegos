function onSelectRowEvent(id)
{
  //Gets the selected row id
  rowid = $(this).jqGrid('getGridParam', 'selrow');
  //Gets an object with the selected row data
  rowdata = $(this).jqGrid('getRowData', rowid);
  //Sets the "Invoice id" in this hidden input (defined in the base.blade.php),
  //the "beforeClearEvent" and "afterClearEvent" of the "Invoice Items" grid
  //will read this value.
  $('#selectedInvoiceId').val(rowdata['id']);
  //When called it clears the search values and sends a server request.
  //Calling this method will trigger the "beforeClear", "afterClear" and
  //"onLoadComplete" events.
  $('#InvoiceItemsGrid')[0].clearToolbar();
  //Sets a new caption to the grid
  $('#InvoiceItemsGrid').setCaption('Items of invoice #' + rowdata['id']);
}
