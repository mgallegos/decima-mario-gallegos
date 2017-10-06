@{{
GridRender::setGridId("myFirstGrid")
  ->enablefilterToolbar()
  ->setGridOption('url',URL::to('/grid-data'))
  ->setFileProperty('title', 'Invoices') //Laravel Excel File Property
  ->setFileProperty('creator', 'YOUR USERNAME') //Laravel Excel File Property
  ->setSheetProperty('fitToPage', true) //Laravel Excel Sheet Property
  ->setSheetProperty('fitToHeight', true) //Laravel Excel Sheet Property
  ->addColumn(array('index'=>'id', 'width'=>55))
  ->addColumn(array('label'=>'Product','index'=>'product','width'=>100))
  ->renderGrid()
}}
