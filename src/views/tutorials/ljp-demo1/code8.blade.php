@{{
GridRender::setGridId("InvoiceItemsGrid")
  ->enableFilterToolbar()
  ->setGridOption('url',URL::to('/invoice-item-grid'))
  ->setGridOption('rowNum',5)
  ->setGridOption('width', 750)
  ->setGridOption('rowList',array(5,10,15,20))
  ->setGridOption('caption','Invoice Items')
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
  ->addColumn(array('name'=>'InvoiceId','index'=>'DEMO_Invoice.id','hidden' => true, 'searchoptions'=>array('sopt'=>array('eq'))))
  ->addColumn(array('index'=>'id', 'hidden' => true))
  ->addColumn(array('index'=>'country', 'hidden' => true))
  ->renderGrid()
}}
