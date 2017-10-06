@{{
GridRender::setGridId("myFirstGrid")
  ->enableFilterToolbar()
  ->setGridOption('url',URL::to('/grid-data'))
  ->setGridOption('rowNum', 5)
  ->setGridOption('shrinkToFit',false)
  ->setGridOption('sortname','id')
  ->setGridOption('caption','Laravel 4 jqGrid package demo')
  ->setGridOption('useColSpanStyle', true)
  ->setNavigatorOptions('navigator', array('viewtext'=>'view'))
  ->setNavigatorOptions('view',array('closeOnEscape'=>false))
  ->setFilterToolbarOptions(array('autosearch'=>true))
  ->setGridEvent('gridComplete', 'gridCompleteEvent') //gridCompleteEvent must be previously declared as a javascript function.
  ->setNavigatorEvent('view', 'beforeShowForm', 'function(){alert("Before show form");}')
  ->setFilterToolbarEvent('beforeSearch', 'function(){alert("Before search event");}')
  ->addGroupHeader(array('startColumnName' => 'amount', 'numberOfColumns' => 3, 'titleText' => 'Price'))
  ->addColumn(array('index'=>'id', 'width'=>55))
  ->addColumn(array('label'=>'Product','index'=>'product','width'=>100))
  ->addColumn(array('label'=>'Amount','index'=>'amount','index'=>'amount', 'width'=>80, 'align'=>'right'))
  ->addColumn(array('label'=>'Total','index'=>'total','index'=>'total', 'width'=>80))
  ->addColumn(array('label'=>'Note','index'=>'note','index'=>'note', 'width'=>55,'searchoptions'=>array('attr'=>array('title'=>'Note title'))))
  ->renderGrid()
}}
