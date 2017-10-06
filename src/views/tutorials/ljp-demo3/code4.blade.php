&lt;div id="btn-toolbar" class="section-header btn-toolbar" role="toolbar">
  &lt;div id="btn-group-1" class="btn-group">
    @{{ Form::button('&lt;i class="fa fa-plus">&lt;/i> New', array('id' => 'btn-new', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Add a new book')) }}
    @{{ Form::button('&lt;i class="fa fa-refresh">&lt;/i> Refresh', array('id' => 'btn-refresh', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Refresh grid data')) }}
    &lt;div class="btn-group">
       @{{ Form::button('&lt;i class="fa fa-share-square-o">&lt;/i> Export &lt;span class="caret">&lt;/span>', array('class' => 'btn btn-default dropdown-toggle', 'data-container' => 'body', 'data-toggle' => 'dropdown')) }}
       &lt;ul class="dropdown-menu">
         &lt;li>&lt;a id='export-xls' class="fake-link">&lt;i class="fa fa-file-excel-o">&lt;/i> xls&lt;/a>&lt;/li>
         &lt;li>&lt;a id='export-csv' class="fake-link">&lt;i class="fa fa-file-text-o">&lt;/i> csv&lt;/a>&lt;/li>
       &lt;/ul>
    &lt;/div>
  &lt;/div>
  &lt;div id="btn-group-2" class="btn-group">
    @{{ Form::button('&lt;i class="fa fa-edit">&lt;/i> Edit', array('id' => 'btn-edit', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Edit book')) }}
    @{{ Form::button('&lt;i class="fa fa-minus">&lt;/i> Delete', array('id' => 'btn-delete', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Delete book')) }}
  &lt;/div>
  &lt;div id="btn-group-3" class="btn-group toolbar-block">
    @{{ Form::button('&lt;i class="fa fa-save">&lt;/i> Save', array('id' => 'btn-save', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Save book')) }}
    @{{ Form::button('&lt;i class="fa fa-times">&lt;/i> Close', array('id' => 'btn-close', 'class' => 'btn btn-default tutorial-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Return to the grid view (data that has not been saved will be lost.)')) }}
  &lt;/div>
&lt;/div>
