<div id="lqp-main">
  <div id="lqp-doc-title" class="clearfix" style="margin-top:10px;">
    <div class="pull-left">
      <h1 class="lqp-header">
        <a href="https://github.com/mgallegos/laravel-jqgrid" target="_blank" style="color:black;">
          <i class="fa fa-github lqp-tooltip" data-toggle="tooltip" data-placement="top" title="Source code is hosted on GitHub"></i></a>
        Laravel jqGrid package
      </h1>
    </div>
    <div class="lqp-poser">
      <a href="https://packagist.org/packages/mgallegos/laravel-jqgrid" target="_blank">
        <img src="https://poser.pugx.org/mgallegos/laravel-jqgrid/v/stable.svg">
      </a>
      <a href="https://packagist.org/packages/mgallegos/laravel-jqgrid" target="_blank">
        <img src="https://poser.pugx.org/mgallegos/laravel-jqgrid/downloads.svg">
      </a>
    </div>
  </div>
  <hr class="lqp-header-hr">
  <p>Laravel jqGrid package allows you to easily integrate the popular jQuery Grid Plugin (jqGrid) into your Laravel application</p>
  {{
  GridRender::setGridId("docGrid")
              //->setGridAsPivot()
              //->enablefilterToolbar()
              ->setGridOption('url',URL::to('/cms/open-source-development/laravel-jqgrid/grid0'))
              ->setGridOption('rowNum',150)
              ->setGridOption('loadonce', true)
              ->setGridOption('width', 730)
              ->setGridOption('height',172)
              ->setGridOption('rowList',array(5,10))
              ->setGridOption('caption','Laravel 4 jqGrid package demo')
              //->setGridOption('useColSpanStyle', false)
              //->setGroupHeadersOptions(array('useColSpanStyle' => true, 'groupHeaders' => array()))
              //->setGridOption('xDimension', array( array('dataName' => 'date', 'label' => 'Date')))
              //->setGridOption('aggregates', array( array('member' => 'amount', 'aggregator' => 'sum', 'formatter' => 'number')))
              //->setGridOption('rowTotals', true)
              ->setNavigatorOptions('navigator', array('viewtext'=>'view'))
              ->setNavigatorOptions('view',array('closeOnEscape'=>false))
              ->addGroupHeader(array('startColumnName' => 'amount', 'numberOfColumns' => 3, 'titleText' => 'Price'))
              ->addColumn(array('label'=>'Inv. No.', 'name' => 'inv', 'align'=>'center'))
              ->addColumn(array('label'=>'Date', 'name' => 'date'))
              ->addColumn(array('label'=>'Client', 'name' => 'client'))
              ->addColumn(array('label'=>'Amount', 'name' => 'amount', 'align' => 'right', 'formatter' => 'currency', 'formatoptions' => array('prefix' => '$ ')))
              ->addColumn(array('label'=>'Tax', 'name' => 'tax', 'align' => 'right', 'formatter' => 'currency', 'formatoptions' => array('prefix' => '$ ')))
              ->addColumn(array('label'=>'Total', 'name' => 'total', 'align' => 'right', 'formatter' => 'currency', 'formatoptions' => array('prefix' => '$ ')))
              ->addColumn(array('label'=>'Notes', 'name' => 'notes'))
              ->renderGrid()
  }}
  <h2 class="lqp-header" style="margin-top: 20px;">Requirements</h2>
  <hr class="lqp-header-hr">
  <ul>
    <li>
      <a href="http://laravel.com/docs/installation" target="_blank">Laravel 4 or 5 Framework</a>
    </li>
    <li>
      <a href="http://jquery.com/" target="_blank">jQuery v2.0.0 or later</a>
    </li>
    <li>
      <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">Your choice of a jQuery UI theme</a>
    </li>
    <li>
      <a href="https://free-jqgrid.github.io/" target="_blank">Free jQuery Grid Plugin (Open Source)</a> or <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin (Commercial product)</a>
    </li>
  </ul>
  <h2 class="lqp-header">Features</h2>
  <hr class="lqp-header-hr">
  <ul>
    <li>Spreadsheet Exporter.</li>
    <li>CSV Exporter.</li>
    <li>Config file with global properties to use in all grids of your application.</li>
    <li>PHP Render to handle the jqGrid HTML and Javascript code.</li>
    <li>JSON Data Enconder to send the data to the grid in the correct format.</li>
    <li>Datasource independent (you are able to create your own datasource implementation).</li>
  </ul>
  <h2 class="lqp-header">Installation</h2>
  <hr class="lqp-header-hr">
  <p>Require this package in your composer.json and run composer update:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-0">Copy</span>
  </div>
  <div id='lqp-code-0' class="card lqp-well">
    <ul class="list-group list-group-flush">
       <li class="list-group-item">"mgallegos/laravel-jqgrid": "1.*"</li>
    </ul>
  </div>
  <p>After updating composer, add the ServiceProvider to the providers array in app/config/app.php:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-1">Copy</span>
  </div>
  <div id='lqp-code-1' class="card lqp-well">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">'Mgallegos\LaravelJqgrid\LaravelJqgridServiceProvider',</li>
    </ul>
  </div>
  <p>Add the Render and Encoder Facade to the aliases array in app/config/app.php:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-2">Copy</span>
  </div>
  <div id='lqp-code-2' class="card lqp-well">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">'GridRender' => 'Mgallegos\LaravelJqgrid\Facades\GridRender',<br>'GridEncoder' => 'Mgallegos\LaravelJqgrid\Facades\GridEncoder',</li>
    </ul>
  </div>
  <p>Optionally, run the following command if you wish to overwrite the default configuration properties, on Laravel 5:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-3">Copy</span>
  </div>
  <div id='lqp-code-3' class="card lqp-well">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">php artisan vendor:publish --provider="Mgallegos\LaravelJqgrid\LaravelJqgridServiceProvider"</li>
    </ul>
  </div>
  <p>And on Laravel 4:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-3a">Copy</span>
  </div>
  <div id='lqp-code-3a' class="card lqp-well">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">php artisan config:publish mgallegos/laravel-jqgrid/</li>
    </ul>
  </div>
  <h2 class="lqp-header">Usage</h2>
  <hr class="lqp-header-hr">
  <h3 class="">Step 1: Use the Grid Render Facade to create a grid in your application.</h3>
  <p>The following code shows the most important methods that you'll need to create a grid, you can find a description for each method in the <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Renders/RenderInterface.php" target="_blank">RenderInterface source code</a>. If it is your first time usign the <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin</a> I recommend you to take a look at its <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:jqgriddocs" target="_blank">official documentation</a> as it will help you to know what options are available and what they do. Having said that let's start by creating the view <strong>app/view/myview.blade.php:</strong></p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-4a">Copy</span>
  </div>
  <pre id='lqp-code-4a' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example1a')</pre>
  <div class="alert alert-info" role="alert">
    <p><i class="fa fa-info-circle fa-lg"></i> Take into account that when you add a column, the value of the <strong>"index"</strong> property must match the column name of your database table.</p>
  </div>
  <p>If you are creating a <strong>Pivot Grid</strong> the method <strong>addColumn</strong> has no effect, instead you have to use the following methods: <strong>setGridAsPivot()</strong>, <strong>addXDimension()</strong>, <strong>addYDimension()</strong>, <strong>addAggregate()</strong> and you can keep using the method <strong>setGridOption()</strong> to set <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotsettings" target="_blank">pivot options</a>.
  <div class="alert alert-info" role="alert">
    <p><i class="fa fa-info-circle fa-lg"></i> Don’t know what a <strong>Pivot Grid</strong> is? Take a look at the <a href="{{ URL::to('/cms/open-source-development/laravel-jqgrid/demo1') }}" target="_blank">third grid of the first demo</a> and <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">the official documentation</a>.</p>
  </div>
  <p>The code for creating a <strong>Pivot Grid</strong> should look something like this:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-4b">Copy</span>
  </div>
  <pre id='lqp-code-4b' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example1b')</pre>
  <div class="alert alert-info" role="alert">
    <p><i class="fa fa-info-circle fa-lg"></i> When adding dimensions the value of the <strong>"dataName"</strong> property must match the column name of your database table and in the case of aggregates is the property <strong>"member"</strong> that must match.</p>
  </div>
  <img src="https://storage.googleapis.com/decimaerp/organizations/1/XLS.png" class="pull-left img-responsive" style="margin-right: 5px">
  <p>By default the package enables both the  <strong>CSV</strong> and <strong>XLS</strong> exporter (these are the buttons that appear in the grid navigator), however you can hide them by using the following methods: <strong>hideXlsExporter()</strong> and <strong>hideCsvExporter()</strong>.</p>
  <p>The package <a href="http://www.maatwebsite.nl/laravel-excel/docs" target="_blank">Laravel Excel</a> is beign used to generate the <strong>CSV</strong> and <strong>XLS</strong> files, you can use the methods <strong>setFileProperty()</strong> and <strong>setSheetProperty()</strong> to set properties of the  <a href="http://www.maatwebsite.nl/laravel-excel/docs" target="_blank">Laravel Excel</a> package, take a look at the <a href="http://www.maatwebsite.nl/laravel-excel/docs/reference-guide" target="_blank">Laravel Excel Reference Guide</a> to see all available <a href="http://www.maatwebsite.nl/laravel-excel/docs/reference-guide#file-properties" target="_blank">file properties</a> and <a href="http://www.maatwebsite.nl/laravel-excel/docs/reference-guide#sheet-properties" target="_blank">sheet properties</a>. Example code:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-4c">Copy</span>
  </div>
  <pre id="lqp-code-4c" class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example1c')</pre>
  <div class="alert alert-warning" role="alert">
    <p><i class="fa fa-warning fa-lg"></i> Be aware that this package does NOT include the <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin</a>, <a href="http://jquery.com/" target="_blank">jQuery</a> and <a href="http://jqueryui.com/" target="_blank">jQuery UI</a>, that is your work to do.</p>
  </div>
  <div class="hidden-lg" style="margin-bottom: 5px;">
      <!-- Blog Post -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-9426377696368258"
           data-ad-slot="1616020474"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>
  <h3>Step 2: Create a "repository class" <i style="color:#31708f;" class="fa fa-info-circle lqp-tooltip" data-toggle="tooltip" data-placement="right" title="This class is the one in charge of providing the data to be shown in your grid."></i>.</h3>
  <p>The package includes the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> which is an implementation of the <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/RepositoryInterface.php" target="_blank">RepositoryInterface</a>, extending this class will make your life easier as it will do all the heavy lifting for you when using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> or <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> to implement your repository class. If you need to, you can also create your own  <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/RepositoryInterface.php" target="_blank">RepositoryInterface</a> implementation, just remember to take into account all parameter received by both methods and the expected type of the return value. Let's create the class <strong>app/models/ExampleRepository:</strong></p>
  <p>If you are using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a>, your repository class should look like this:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-5">Copy</span>
  </div>
  <pre id='lqp-code-5' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example2')</pre>
  <p>If you are using <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> (use <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> only in those cases where your data comes from one table, if your data comes from more than one table then use <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a>), your repository class should look like this:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-6">Copy</span>
  </div>
  <pre id='lqp-code-6' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example3')</pre>
  <p>And if you are creating your own implementation, your repository class should look something like this:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-7">Copy</span>
  </div>
  <pre id='lqp-code-7' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example4')</pre>
  <h3>Step 3: Create a route to handle your grid data request.</h3>
  <p>The package includes a <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Encoders/JqGridJsonEncoder.php" target="_blank">JSON Data Enconder</a> to help you send the data to the grid in the correct format. (If you are using RESTful controllers, an instance of a class that implements the interface <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Encoders/RequestedDataInterface.php" target="_blank">Mgallegos/LaravelJqgrid/Encoders/RequestedDataInterface</a> has already been bound in the package service provider, so all you'll have to do is declare it as an argument in you class constructor). Let's add the following lines in the <strong>app/routes.php:</strong></p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="lqp-code-8">Copy</span>
  </div>
  <pre id='lqp-code-8' class="prettyprint">@include('decima-mario-gallegos::oss-dev/laravel-jqgrid/example5')</pre>
  <div class="hidden-lg" style="margin-bottom: 5px;">
      <!-- Blog Post -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-9426377696368258"
           data-ad-slot="1616020474"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>
  <h3>Step 4: Edit package config file (optional)</h3>
  <p>In the package config file of your application (<strong>app/config/packages/mgallegos/laravel-jqgrid/config.php</strong>) you can set global properties to be used in all grids of your application.</p>
  <h2 class="lqp-header">Aditional information</h2>
  <hr class="lqp-header-hr">
  <p>Any questions, problems or feature request feel free to open an issue on <a href="https://github.com/mgallegos/laravel-jqgrid/issues" target="_blank">GitHub</a>.</p>
  <h2 class="lqp-header">TODO</h2>
  <hr class="lqp-header-hr">
  <ul>
    <li><s>JqGrid Render.</s></li>
    <li><s>JqGrid JSON Encoder.</s></li>
    <li><s>Query Builder and Eloquent ORM implementation.</s></li>
    <li><s>Global configuration file.</s></li>
    <li><s>Pivot table implementation.</s></li>
    <li><s>Frozen columns</s></li>
    <li><s>Group headers</s></li>
    <li><s>Spreadsheet Exporter.</s></li>
    <li><s>CSV Exporter.</s></li>
    <li><s>Tree-Grid implementation.</s></li>
    <li>Sub-Grid implementation.</li>
    <li>PDF Exporter.</li>
    <li>Advanced Searching implementation.</li>
  </ul>
  <h2 class="lqp-header">License</h2>
  <hr class="lqp-header-hr">
  <p>Laravel jqGrid package is open source software licensed under the <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/LICENSE.md" target="_blank">MIT License</a>.</p>
</div>
