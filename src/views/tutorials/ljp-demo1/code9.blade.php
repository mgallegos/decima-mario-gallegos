function onLoadCompleteEvent(data)
{
  $(this).jqGrid('footerData','set', {'quantity': 'Invoice Total:', 'total': $(this).jqGrid('getCol', 'total', false, 'sum')});
}

function beforeClearEvent()
{
  $(this).jqGrid('setGridParam', {'postData':{"filters":"{'groupOp':'AND','rules':[{'field':'DEMO_Invoice.id','op':'eq','data':'" + $('#selectedInvoiceId').val() + "'}]}"}});
}

function afterClearEvent()
{
  //The id of all "filter toolbar" input text are formed by the prefix "gs_" and the column name.
  $('#gs_InvoiceId').val($('#selectedInvoiceId').val());
}
