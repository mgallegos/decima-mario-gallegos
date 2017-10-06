@{{
GridRender::setGridId("myFirstGrid")
  ->setGridAsPivot()
  ->enablefilterToolbar()
  ->setGridOption('url',URL::to('/grid-data'))
  ->setGridOption('caption','Laravel 4 jqGrid package demo')
  ->setGridOption('rowTotals', true) //Pivot option
  ->setGridOption('colTotals', true) //Pivot option
  ->setNavigatorOptions('navigator', array('view'=>false))
  ->addXDimension(array('dataName' => 'category', 'label' => 'Category'))
  ->addXDimension(array('dataName' => 'description', 'label' => 'Product Name'))
  ->addYDimension(array('dataName' => 'country', 'label' => 'Country'))
  ->addAggregate(array('member' => 'total', 'aggregator' => 'sum', 'formatter' => 'number', 'align'=>'right'))
  ->renderGrid()
}}
