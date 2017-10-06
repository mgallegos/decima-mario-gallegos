<script type='text/javascript'>
  function onLoadCompleteEvent(data)
  {
    $(this).jqGrid('footerData','set', {'quantity': 'Invoice Total:', 'total': $(this).jqGrid('getCol', 'total', false, 'sum')});
  }

  function onSelectRowEvent(id)
  {
    var row = $(this).getRowData(id)
    $('#lqp-demo1-id').val(row['id']);
    $('#InvoiceItemsGrid').jqGrid('destroyFrozenColumns');
    $('#InvoiceItemsGrid').jqGrid('setFrozenColumns');
    $('#InvoiceItemsGrid')[0].clearToolbar();
    //$('#InvoiceItemsGrid').setCaption('Items of invoice #' + row['id']);
    $('#InvoiceItemsGrid').jqGrid('setCaption','Items of invoice #' + row['id']);
  }

  function beforeClearEvent()
  {
    //$('#InvoiceItemsGrid').setGridParam({'postData':{"filters":"{'groupOp':'AND','rules':[{'field':'DEMO_Invoice.id','op':'eq','data':'" + $('#lqp-demo1-id').val() + "'}]}"}});
    $(this).jqGrid('setGridParam', {'postData':{"filters":"{'groupOp':'AND','rules':[{'field':'DEMO_Invoice.id','op':'eq','data':'" + $('#lqp-demo1-id').val() + "'}]}"}});
  }

  function afterClearEvent()
  {
    $('#gs_invoice-id').val($('#lqp-demo1-id').val());
  }

  // function prueba()
  // {
  //   var headers = [],rows = [], row, cellCounter;
  //   jQuery.each($("#gbox_InvoicePivotGrid").find(".ui-jqgrid-sortable"), function( index, header )
  //   {
  //     headers.push(jQuery(header).text());
  //   });
  //   jQuery.each($("#gview_InvoicePivotGrid").find(".ui-widget-content"), function( index, gridRows )
  //   {
  //     row = {}, cellCounter = 0;
  //     jQuery.each($(gridRows).find("td"), function( index, cell)
  //     {
  //       row[headers[cellCounter++]] = $(cell).text();
  //     });
  //     for (i = cellCounter; i < headers.length; i++) {
  //         row[headers[i]] = "";
  //     }
  //     rows.push(row);
  //   });
  // }

</script>
<div class="bs-callout bs-callout-info">
  <h4>Invoices Grid</h4>
  <p>Select an invoice to see all of its items. When a row is selected, the "onSelectRow" event is triggered and the invoice's items are shown in the "Invoice items Grid".</p>
</div>
{!! Form::hidden('lqp-demo1-id', '', array('id'=>'lqp-demo1-id')) !!}
{!!
GridRender::setGridId("InvoiceGrid")
  ->enableFilterToolbar()
  ->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid1'))
  ->setGridOption('rowNum', 5)
  ->setGridOption('width', 750)
  ->setGridOption('height', 115)
  ->setGridOption('rowList',array(5,10,15,20))
  ->setGridOption('caption','Invoices')
  ->setGridOption('viewrecords',true)
  ->setNavigatorOptions('view',array('closeOnEscape'=>false))
  ->setFilterToolbarOptions(array('autosearch'=>true))
  ->setGridEvent('onSelectRow', 'onSelectRowEvent')
  //->setNavigatorEvent('view', 'beforeShowForm', 'function(){alert("Before show form");}')
  //->setFilterToolbarEvent('beforeSearch', 'function(){alert("Before search event");}')
  ->setFileProperty('title', 'Invoices')
  ->setFileProperty('creator', 'Mario Gallegos')
  ->setSheetProperty('fitToPage', true)
  ->setSheetProperty('fitToHeight', true)
  ->addColumn(array('name'=>'id', 'index'=>'id', 'align'=>'center', 'hidden' => true))
  ->addColumn(array('label'=>'Invoice #','index'=>'number', 'align'=>'center', 'width' => 30))
  ->addColumn(array('label'=>'Date', 'align'=>'center','index'=>'date', 'width' => 60 ))
  ->addColumn(array('label'=>'Client','index'=>'client', 'align'=>'right'))
  ->addColumn(array('label'=>'Country','index'=>'country', 'align'=>'right'))
  ->renderGrid()
!!}
<div id="lqp-demo1-ads-1" class="hidden-lg" style="margin-top: 20px;"></div>
<div id="lqp-demo1-ads-2" style="margin-top: 20px;"></div>
<div class="bs-callout bs-callout-info">
  <h4>Invoice Items Grid</h4>
  <p>Items of the invoice selected in the Invoices Grid (notice that the first two columns have been frozen, use the horizontal scroll bar to reach the rest of the columns).</p>
</div>
{!!
GridRender::setGridId("InvoiceItemsGrid")
  //->enableFilterToolbar()
	->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid2'))
	->setGridOption('rowNum',5)
	->setGridOption('width', 750)
	->setGridOption('rowList',array(5,10,15,20))
	->setGridOption('caption','Invoice items')
	->setGridOption('viewrecords',true)
	->setGridOption('footerrow',true)
  ->setGridOption('shrinkToFit', false)
  ->setGridOption('postData',array('filters'=>"{'groupOp':'AND','rules':[{'field':'DEMO_Invoice.id','op':'eq','data':'-1'}]}"))
  ->setGridEvent('loadComplete', 'onLoadCompleteEvent')
	->setFilterToolbarEvent('beforeClear','beforeClearEvent')
  ->setFilterToolbarEvent('afterClear','afterClearEvent')
	->addColumn(array('label'=>'Invoice #', 'index'=>'number', 'align'=>'center', 'width' => 60, 'frozen' => true))
	->addColumn(array('label'=>'Description','index'=>'description', 'width' => 250, 'frozen' => true))
  ->addColumn(array('label'=>'Category','index'=>'category', 'width' => 250))
	->addColumn(array('label'=>'Unit Cost','index'=>'unitCost', 'width' => 100, 'align'=>'right', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ ')))
	->addColumn(array('label'=>'Quantity','index'=>'quantity', 'align'=>'center', 'width' => 100))
	->addColumn(array('label'=>'Total','index'=>'total', 'width' => 100, 'align'=>'right', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ ')))
	->addColumn(array('label'=>'InvoiceId','name'=>'invoice-id','index'=>'DEMO_Invoice.id','hidden' => true, 'searchoptions'=>array('sopt'=>array('eq'))))
  ->addColumn(array('index'=>'id', 'hidden' => true))
  ->addColumn(array('index'=>'country', 'hidden' => true))
	->renderGrid()
!!}
<div class="bs-callout bs-callout-info">
  <h4>Summary Sales Grid (Pivot Grid)</h4>
  <p>A Pivot Grid is a great tool that allows you to organize and summarize selected columns and rows of data. The following grid consolidates the data of the above grids by showing by <strong>Category</strong> and by <strong>Product Name</strong> how much has been sold in each country.</p>
</div>
{!!
GridRender::setGridId("InvoicePivotGrid")
  ->setGridAsPivot()
  ->enableFilterToolbar()
  ->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid2'))
  ->setGridOption('width', 750)
  ->setGridOption('height', 'auto')
  ->setGridOption('caption','Summary Sales')
  //->setGridOption('xDimension', array(array('dataName' => 'category', 'label' => 'Category'), array('dataName' => 'description', 'label' => 'Product Name')))
  //->setGridOption('yDimension', array(array('dataName' => 'country', 'converter' => 'function(value, xData, yData){ return "Countries"; }'), array('dataName' => 'country', 'label' => 'Country')))
  //->setGridOption('yDimension', array(array('dataName' => 'country', 'label' => 'Country')))
  //->setGridOption('aggregates', array(array('member' => 'total', 'aggregator' => 'sum', 'formatter' => 'number', 'align'=>'right')))
  ->setGridOption('rowTotals', true)
  ->setGridOption('colTotals', true)
  ->setGridOption('groupSummaryPos', 'footer')
  ->setNavigatorOptions('navigator', array('view'=>false))
  ->addXDimension(array('dataName' => 'category', 'label' => 'Category'))
  ->addXDimension(array('dataName' => 'description', 'label' => 'Product Desc.'))
  //->addYDimension(array('dataName' => 'country', 'converter' => 'function(value, xData, yData){ return "TotalCountry"; }'))
  ->addYDimension(array('dataName' => 'country', 'label' => 'Country'))
  ->addAggregate(array('member' => 'total', 'aggregator' => 'sum', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ '), 'align'=>'right', 'summaryType' => 'sum'))
  ->renderGrid()
!!}
