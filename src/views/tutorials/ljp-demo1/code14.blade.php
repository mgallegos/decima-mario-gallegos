@{{
GridRender::setGridId("PivotGrid")
  ->setGridAsPivot()
  ->enableFilterToolbar()
  ->setGridOption('url',URL::to('/invoice-item-grid'))
  ->setGridOption('width', 750)
  ->setGridOption('height', 'auto')
  ->setGridOption('caption','Summary Sales')
  ->setGridOption('rowTotals', true)//Pivot option
  ->setGridOption('colTotals', true)//Pivot option
  ->setGridOption('groupSummaryPos', 'footer')//Pivot option
  ->setNavigatorOptions('navigator', array('view'=>false))
  ->addXDimension(array('dataName' => 'category', 'label' => 'Category'))
  ->addXDimension(array('dataName' => 'description', 'label' => 'Product Desc.'))
  ->addYDimension(array('dataName' => 'country', 'label' => 'Country'))
  ->addAggregate(array('member' => 'total', 'aggregator' => 'sum', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ '), 'align'=>'right', 'summaryType' => 'sum'))
  ->renderGrid()
}}
