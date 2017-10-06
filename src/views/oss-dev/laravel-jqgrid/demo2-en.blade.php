<script type='text/javascript'>
  function afterSubmitEvent(response, postdata)
  {
    //console.log(response);
    //console.log(JSON.parse(response.responseText));
    result = JSON.parse(response.responseText);
    if(result.success && $('#BookGrid1').length > 0)
    {
      $('#BookGrid1')[0].clearToolbar();
    }
    return [result.success, result.message];
  }
</script>

<div class="bs-callout bs-callout-info">
  <h4>Books Grid (jqGrid form)</h4>
  <p><a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin</a> supports creating a form "on the fly" to view, add, edit and delete grid data. Use <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator" target="_blank">jqGrid predefined actions</a> to:</p>
  <ul>
    <li>Add a new book.</li>
    <li>Edit selected book.</li>
    <li>View selected book.</li>
    <li>Delete selected book.</li>
  </ul>
  <p>These actions can be triggered by clicking on the add, edit, view and delete buttons, located at the bottom of the grid (grid navigator).</p>
</div>
<div id='BookGrid0Container'>
{{
GridRender::setGridId("BookGrid0")
  ->enablefilterToolbar()
  ->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid3'))
  ->setGridOption('editurl',URL::to('/cms/open-source-development/laravel-jqgrid/crud'))
  ->setGridOption('rowNum', 10)
  ->setGridOption('rownumbers', true)
  ->setGridOption('width', 750)
  ->setGridOption('height', 225)
  ->setGridOption('rowList',array(10,20,30))
  ->setGridOption('caption','Books')
  ->setGridOption('viewrecords',true)
  ->setNavigatorOptions('navigator', array('add' => true, 'edit' => true, 'del' => true, 'view' => true, 'refresh' => false))
  ->setNavigatorOptions('add', array('closeAfterAdd' => true))
  ->setNavigatorEvent('add', 'afterSubmit', 'afterSubmitEvent')
  ->setNavigatorOptions('edit', array('closeAfterEdit' => true))
  ->setNavigatorEvent('edit', 'afterSubmit', 'afterSubmitEvent')
  ->setNavigatorEvent('del', 'afterSubmit', 'afterSubmitEvent')
  ->addColumn(array('index' => 'id', 'hidden' => true, 'editable' => true))
  //->addColumn(array('index' => 'id', 'hidden' => false, 'editable' => true, 'editoptions' => array('disabled' => 'disabled')))
  ->addColumn(array('label' => 'Name', 'index'=>'name', 'editable' => true, 'editrules' => array('required' => true)))
  ->addColumn(array('label' => 'Description','index' => 'description', 'editable' => true, 'edittype' => 'textarea'))
  ->addColumn(array('label' => 'Author','index' => 'author', 'editable' => true, 'editrules' => array('required' => true)))
  ->addColumn(array('label' => 'Publisher','index' => 'publisher', 'editable' => true, 'editrules' => array('required' => true)))
  ->addColumn(array('label' => 'Language','index' => 'language', 'align' => 'center', 'width' => 90, 'editable' => true, 'editoptions' => array('value' => 'E:English;S:Spanish;G:German'), 'edittype' => 'select', 'formatter' => 'select', 'editrules' => array('required' => true)))
  ->addColumn(array('label' => 'Print Length', 'index' => 'length', 'align' => 'center', 'width' => 90, 'editable' => true, 'formatter' => 'integer', 'editrules' => array('required' => true, 'integer' => true)))
  ->addColumn(array('label' => 'ASIN', 'index' => 'asin', 'align' => 'center', 'width' => 105, 'editable' => true, 'editrules' => array('required' => true)))
  ->addGroupHeader(array('startColumnName' => 'name', 'numberOfColumns' => 2, 'titleText' => 'Book Information'))
  ->renderGrid()
}}
</div>
<div id="lqp-demo1-ads-2" class="hidden-lg" style="margin-top: 20px;"></div>
<div class="alert alert-warning" role="alert" style="margin-top: 20px;">
  <p><i class="fa fa-warning fa-lg"></i> Be aware that this package does NOT include create, update and delete server-side functionalities. However this can be easily accomplished by using <a href="http://laravel.com/docs/eloquent#insert-update-delete" target="_blank">Eloquent ORM.</a></p>
</div>
