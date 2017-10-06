@extends('tutorials')

@section('twitter')
<meta name="twitter:title" content="Building a Pivot Grid and handling jqGrid events using Laravel jqGrid package">
<meta name="twitter:description" content="In this tutorial we'll simulate a summary page of a midsize business by showing all invoices issued by the business and a summary of product sales by category and by country..">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/tutorials/demo1/750x250.jpg') }}">
@stop

@section('title')
  Building a Pivot Grid and handling jqGrid events using Laravel jqGrid package
@stop

@section('date')
   Posted on September 12, 2014
@stop

@section('social')
  {!! Form::social('Building a Pivot Grid and handling jqGrid events using #Laravel #jqGrid package', 'http://goo.gl/h7ul1P') !!}
@stop

@section('post')
  <ul class="nav nav-tabs" role="tablist">
    <li class="in active"><a href="#td1-tutorial" role="tab" data-toggle="tab">Tutorial</a></li>
    <li><a href="#td1-live-demo" role="tab" data-toggle="tab" data-tutorial="grid">Live Demo</a></li>
  </ul>
  <div class="tab-content clearfix">
    <div class="tab-pane fade in active clearfix" id="td1-tutorial">
      <p class="first-paragraph">In this tutorial we'll simulate a summary page of a midsize business by showing all invoices issued by the business and a summary of product sales by category and by country. For this purpose three grids will be created:</p>
      <ul>
        <li><strong>Invoices Grid:</strong> shows all invoices issued by the business.</li>
        <li><strong>Invoice Items Grid:</strong> shows the items of the invoice selected in the "Invoices Grid".</li>
        <li><strong>Summary Sales Grid:</strong> shows by "Category" and by "Product Name" how much has been sold in each country.</li>
      </ul>
      <h3 class="lqp-header">Requirements</h3>
      <hr class="lqp-header-hr">
      <ul>
        <li>
          <a href="http://php.net/" target="_blank">PHP 5.4 or later</a>
        </li>
        <li>
          <a href="http://php.net/manual/en/book.mcrypt.php" target="_blank">MCrypt PHP Extension</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation#install-composer" target="_blank">Composer</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation" target="_blank">Laravel 4 Framework</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/database" target="_blank">MySQL or any other database system supported by Laravel</a>
        </li>
        <li>
          <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>
        </li>
        <li>
          <a href="http://jquery.com/" target="_blank">jQuery v2.0.0 or later</a>
        </li>
        <li>
          <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">Your choice of a jQuery UI theme</a>
        </li>
        <li>
          <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin v4.6.0 or later</a>
        </li>
      </ul>
      <p>I've put together a <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">Laravel application</a> that meets the above requirements (except for PHP, Composer and database system, of course) to make it easier for you to follow this tutorial (if you want to use you own application feel free to skip step 1). The <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">application</a> contains the following important files:</p>
      <ul>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a>: This is the php script that we'll be editing in this tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">app/database/migrations/2014_07_20_204757_create_demos_tables.php</a>: This script contains the database schema, for this tutorial we need two database tables: DEMO_Invoice (invoices will be stored here) and DEMO_Invoice_Item (invoices items will be stored here).</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/InvoiceTableSeeder.php" target="_blank">app/database/seeds/InvoiceTableSeeder.php</a> and <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/InvoiceItemTableSeeder.php" target="_blank">app/database/seeds/InvoiceItemTableSeeder.php</a>: to avoid wasting time on unrelated tasks to this tutorial, we'll seed both tables (DEMO_Invoice and DEMO_Invoice_Item) with a set of predefined data.</li>
      </ul>
      <h3 class="lqp-header">Step 1: Install application</h3>
      <hr class="lqp-header-hr">
      <p>Let's start by cloning and installing the application I mentioned above, open a terminal and run the following commands:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-0">Copy</span>
      </div>
      <pre id='td1-code-0' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code0')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you don't have Git installed, <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/archive/master.zip">click here to download the application.</a></p>
      </div>
      <h3 class="lqp-header">Step 2: Create database</h3>
      <hr class="lqp-header-hr">
      <p>Create a MySQL database, a user and grant the user all privileges on that database (if you are using another database system, use the appropriate commands for that database system). Run the following commands on your MySQL server instance:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-1">Copy</span>
      </div>
      <pre id='td1-code-1' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code1')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> To run MySQL as root from a terminal, use the following command: mysql -uroot -p</p>
      </div>
      <h3 class="lqp-header">Step 3: Configure database connection</h3>
      <hr class="lqp-header-hr">
      <p>Edit <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/config/database.php" target="_blank">app/config/database.php</a> with the database name, username and password that we used in the previous step. It should look something like this:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-2">Copy</span>
      </div>
      <pre id='td1-code-2' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code2')</pre>
      <h3 class="lqp-header">Step 4: Run Laravel migration</h3>
      <hr class="lqp-header-hr">
      <p>Use <a href="http://laravel.com/docs/migrations" target="_blank">Laravel Migrations</a> to create the database tables and seed them. Open a terminal and run the following command in the root directory (./tutorial1/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-3">Copy</span>
      </div>
      <div id='td1-code-3' class="well well-sm lqp-well">php artisan migrate --seed</div>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you changed the database schema or added more data to be seeded, you can use the following command to rollback and re-run all of your migrations: php artisan migrate:refresh --seed</p>
      </div>
      <div id="td1-ads-1" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Step 5: Create Invoices Grid</h3>
      <hr class="lqp-header-hr">
      <p>We'll use <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> to create all grids in this tutorial. The first thing we need to do is use the "GridRender" Facade to create the HTML and JavaScript code of the grid. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section add the following:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-4">Copy</span>
      </div>
      <pre id='td1-code-4' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code4')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> You might have noticed in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> script that we are using <a href="http://laravel.com/docs/templates#blade-templating" target="_blank">"Blade Templating"</a>, this allows us to keep our code clean by extending the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/base.blade.php" target="_blank">app/views/base.blade.php</a> where the HTM body, CSS and JavaScript scripts are included.</p>
      </div>
      <p>Not sure of what we just did? don’t worry, here is a brief explanation:</p>
      <ul>
        <li>The method "enableFilterToolbar" (line 3) adds the row you see below the column names in the live demo which allows your users to filter the grid data by column.</li>
        <li>The method "setGridOption" allows you to set any of the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">options available</a> from the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">jqGrid plugin</a>, note that there is a correspondence in data types which means that if in the documentation the value of an option is set with the boolean type, when using this method you will also set the value of that option using the PHP boolean type.</li>
        <li>The method "addColumn" speaks by itself, however is really important to note that the property "index" of each column correspond with the name of <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">a column of the DEMO_Book table of the database</a>. The correspondence in data types also applies for this method, you can find all <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">available options</a> in the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">jqGrid plugin Colmodel API documentation</a>.</li>
      </ul>
      <p>The second thing we need to do to make the grid work is to create a "repository class", this class is the one in charge of providing the data to be shown in the grid. Create the file <strong>app/models/InvoiceRepository.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-5">Copy</span>
      </div>
      <pre id='td1-code-5' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code5')</pre>
      <p>Please note:</p>
      <ul>
        <li>Extending the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> (included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>) will make your life easier as it will do all the heavy lifting for you when using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> or <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> to implement your repository class.</li>
        <li>In this case, we are reading only from one table therefore the easiest way to implement the repository class is to use an "Eloquent Model", this is why in the constructor, the class receives an "Eloquent Model" instance as a parameter (for this purpose an <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/models/Invoice.php" target="_blank">Invoice Model has already been included in the application)</a>.</li>
        <li>The "visibleColumns” variable contains the columns that will be shown in the grid, this are the ones we define when using the "addColumn" method.</li>
      </ul>
      <p>Now, all that is needed is create a route to handle the grid data request. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('url', URL::to('/invoice-grid'))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-6">Copy</span>
      </div>
      <pre id='td1-code-6' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code6')</pre>
      <p>Note that we are using the "GridEncoder" Facade, this is a "JSON Data Encoder" included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> that helps you send the data to the grid in the correct format. The method "encodeRequestedData" receives as parameter the "repository class" that we just created.</p>
      <p>Now we are going to run the application to see our first grid working. Open a terminal and run the following command in the root directory (./tutorial1/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-7">Copy</span>
      </div>
      <div id='td1-code-7' class="well well-sm lqp-well">php artisan serve</div>
      <p>Open your browser and go to <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> to see your live application.</p>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-info-circle fa-lg"></i> Typically, you may use a web server such as Apache or Nginx to serve your Laravel applications however to avoid problems related to server configurations, for this tutorial we’ll be using the Laravel Development Server.</p>
      </div>
      <h3 class="lqp-header">Step 6: Create Invoice Items Grid</h3>
      <hr class="lqp-header-hr">
      <p>We'll use this grid to show the items of the invoice selected in the "Invoices Grid". Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following code below the "Invoice Grid" code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-8">Copy</span>
      </div>
      <pre id='td1-code-8' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code8')</pre>
      <p>Please note:</p>
      <ul>
        <li>The value of the option "postData" is a trick we are using to avoid loading data the first time the grid makes a server request, what we are doing is simulating what happens when someone manually uses the "filter toolbar” to filter the grid data by column. We are assigning the value "-1" to the search field of the "DEMO_Invoice.id" column (you won't see this column because is hidden) to make sure that no data will be loaded.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:events&s[]=loadcomplete" target="_blank">"loadComplete" event </a>is executed immediately after every server request. We'll use it to fill out the footer row (visible when the option "footerrow" is set to true) with the "Invoice Total", the code to accomplish this will be defined in the "onLoadCompleteEvent" JavaScript function.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:toolbar_searching&s[]=beforeclear" target="_blank">"beforeClear"  filter toolbar event</a> is executed before clearing the data from the search elements. Here we'll use the "postData" trick but in this case to load the data of the selected "Invoice ID",  the code to accomplish this will be defined in the "beforeClearEvent" JavaScript function.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:toolbar_searching&s[]=afterclear" target="_blank">"afterClear"  filter toolbar event</a> is executed after clearing the data from the search elements. We'll use it to set the "ID" of the selected row (of the "Invoices Grid") in the search field of the "InvoiceId" column which as you can see in its column definition it's hidden. By doing this when the user perform a search using the filter toolbar, the value of the search field of the "InvoiceId" column will be included by the search, the code to accomplish this will be defined in the "afterClearEvent" JavaScript function.</li>
        <li>The first two column that we are adding ("Invoice #" and "Description") have the option "frozen" set to true, this means that if the sum of width of the grid columns is greater than the width of the grid, a horizontal scroll will appear but this two column won’t move.</li>
      </ul>
      <p>As you noticed in the grid definition, we are making reference to three JavaScript function, open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following JavaScript code into the JavaScript section (this section is located at the beginning of "container" section):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-9">Copy</span>
      </div>
      <pre id='td1-code-9' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code9')</pre>
      <p>Now, let's create the "repository class" for this grid. Create the file <strong>app/models/InvoiceItemRepository.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-10">Copy</span>
      </div>
      <pre id='td1-code-10' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code10')</pre>
      <p>Note that we are again extending the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> but in this case we are using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> because we are reading from more than one table (DEMO_Invoice and DEMO_Invoice_Item) this is why the constructor class receives a "DatabaseManager" instance (this is the class behind the <a href="http://laravel.com/docs/facades#facade-class-reference" target="_blank">Laravel DB Facade</a>).</p>
      <p>Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('url', URL::to('/invoice-item-grid'))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-11">Copy</span>
      </div>
      <pre id='td1-code-11' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code11')</pre>
      <p>Now, open your browser and refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), you should now see a second <strong>empty grid.</strong></p>
      <h3 class="lqp-header">Step 7: Bind onSelectRow event to the Invoices Grid</h3>
      <hr class="lqp-header-hr">
      <p>Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following line to the "Invoices Grid” code definition (you can add it at any position as long as it is before the method "renderGrid"):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-12">Copy</span>
      </div>
      <div id='td1-code-12' class="well well-sm lqp-well">->setGridEvent('onSelectRow', 'onSelectRowEvent')</div>
      <p>Within this same script add the following JavaScript code into the JavaScript section:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-13">Copy</span>
      </div>
      <pre id='td1-code-13' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code13')</pre>
      <p>Now, open your browser and refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), when you click an invoice in the first grid, you should now see its items loaded in the second grid, try using the "Invoice Items Grid" filter toolbar and you will notice that your search will be always performed within the items of the selected invoice.</p>
      <div id="td1-ads-2" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Step 8: Create Summary Sales Grid (Pivot Grid)</h3>
      <hr class="lqp-header-hr">
      <p>A Pivot Grid is a great tool that allows you to organize and summarize selected columns and rows of data. We’ll use this grid to show by "Category" and by "Product Name" how much has been sold in each country. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following code below the "Invoice Items Grid" code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-14">Copy</span>
      </div>
      <pre id='td1-code-14' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code14')</pre>
      <p>Please note:</p>
      <ul>
        <li>In this case, we are pointing to the same URL (setGridOption('url',URL::to('/invoice-item-grid'))) as the "Invoice Items Grid", this means that we are using the same "repository class", this class provides all the information we need to create the "Pivot Grid", if you look closely to <strong>app/models/InvoiceRepository.php</strong> you will see that what we have there is a join between the "DEMO_Invoice" and "DEMO_Invoice_Item" tables, as a result for every row we have "Product Category", "Product Description", "Invoice Total by product (total column)" and "Country", there is more data but we simply don’t need it so it will be ignored. The logic use by <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">the jqGrid plugin to build a "Pivot Grid"</a> is the same as, for example, LibreOffice Calc or Microsoft Excel.</li>
        <li>When working with <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grids"</a> is necessary to use the method "setGridAsPivot()", this will tell the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> to handle the grid as a <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grid"</a> instead of a regular grid.</li>
        <li>The options "rowTotals",  "colTotals",  "groupSummaryPos" are  <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotsettings" target="_blank">"Pivot Grid options"</a>, nevertheless, you can keep using the method "setGridOption()" to set a value for these options.</li>
        <li>When working with <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grids"</a> the method "addColumn" has no effect, instead you have to use the following methods: "addXDimension()", "addYDimension()", "addAggregate()". </li>
        <li>Where are adding two "X dimension" which means that we are going to have a column for "Category" and "Product Description", products will be group by category, and for every different product sold by country a row will be created. By adding "Country" as "Y dimension" means that a column will be created for each different country within the data source. And by adding a "SUM agreggator" a row will be added totaling how much has been sold by category in each country.</li>
        <li>When adding dimensions the value of the "dataName" property must match the column name of your database table and in the case of aggregates is the property "member" that must match.</li>
      </ul>
      <p>As explained above, we won't be creating a different "repository class" for this grid, so all there is left to do is open your browser, refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>) and see the <strong>final result of this tutorial.</strong></p>
      <div class="alert alert-success" role="alert">
        <p><i class="fa fa-thumbs-o-up fa-lg"></i> Well done, you have completed the tutorial! To boost your learning I recommend you to experiment  with the code, change options and values, add you own code and see what happens. I know that I left a couple of things unexplained (sorry about that) but it's because the tutorial is already too long as it is, however, feel free to leave your questions or comments below and If you found this tutorial useful don’t forget to <a onclick="$('#back-to-top').click();">share it</a>.</p>
      </div>
    </div>
    <div class="tab-pane fade" id="td1-live-demo" style = "margin-bottom: 20px;">
      @include('oss-dev/laravel-jqgrid/demo1')
    </div>
  </div>
  {!! Form::comments(1) !!}
  <script>
    $(document).ready(function()
    {
      $('#td1-ads-1,#td1-ads-2').append('<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9426377696368258" data-ad-slot="1616020474" data-ad-format="auto"></ins>');
      setTimeout(function()
      {
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
      }, 1000 );
    });
  </script>
@stop
