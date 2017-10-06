@extends('decima-mario-gallegos::tutorials')

@section('twitter')
<meta name="twitter:title" content="Building a CRUD Web App with a custom form using Laravel jqGrid package">
<meta name="twitter:description" content="In this tutorial we'll use a custom form to create a simple CRUD Web App. For this purpose one grid will be created, let's call it Books Grid and custom buttons will be used to...">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/tutorials/demo3/750x250.jpg') }}">
@stop

@section('title')
  Building a CRUD Web App with a custom form using Laravel jqGrid package
@stop

@section('date')
   Posted on September 7, 2014
@stop

@section('social')
  {!! Form::social('Building a CRUD Web App with a custom form using #Laravel #jqGrid package', 'http://goo.gl/gl4iqI') !!}
@stop

@section('post')
  <ul class="nav nav-tabs" role="tablist">
    <li class="in active"><a href="#td3-tutorial" role="tab" data-toggle="tab">Tutorial</a></li>
    <li><a href="#td3-live-demo" role="tab" data-toggle="tab" data-tutorial="grid">Live Demo</a></li>
  </ul>
  <div class="tab-content clearfix">
    <div class="tab-pane fade in active clearfix" id="td3-tutorial">
      <p class="first-paragraph">In this tutorial we'll use a custom form to create a simple CRUD Web App. For this purpose one grid will be created, let's call it "Books Grid" and custom buttons will be used to:</p>
      <ul>
        <li>Add a new book.</li>
        <li>Edit selected book.</li>
        <li>Delete selected book.</li>
        <li>Refresh grid.</li>
        <li>Export data.</li>
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
          <a href="https://raw.githubusercontent.com/flesler/jquery.scrollTo/master/jquery.scrollTo.min.js" target="_blank">jQuery ScrollTo</a>
        </li>
        <li>
          <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">Your choice of a jQuery UI theme</a>
        </li>
        <li>
          <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Core</a>
        </li>
        <li>
          <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Shake</a>
        </li>
        <li>
          <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin v4.6.0 or later</a>
        </li>
        <li>
          <a href="{{ URL::to('/open-source-development/jquery-mg-validation/getting-started') }}" target="_blank">jQuery MG Validation Plugin</a>
        </li>
        <li>
          <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a>
        </li>
      </ul>
      <p>I've put together a <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">Laravel application</a> that meets the above requirements (except for PHP, Composer and database system, of course) to make it easier for you to follow this tutorial (if you want to use you own application feel free to skip step 1). The <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">application</a> contains the following important files:</p>
      <ul>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a>: this is the php script that we'll be editing in this tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/public/assets/tutorial/css/main.css" target="_blank">public/assets/tutorial/css/main.css</a>: contains custom CSS classes used in this tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/public/assets/tutorial/js/helpers.js" target="_blank">public/assets/tutorial/js/helpers.js</a>: contains JavaScript functions used in this tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">app/database/migrations/2014_07_20_204757_create_demos_tables.php</a>: this script contains the database schema, for this tutorial we need one database table: DEMO_Book (books will be stored here).</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/BookTableSeeder.php" target="_blank">app/database/seeds/BookTableSeeder.php</a>: to avoid wasting time on unrelated tasks to this tutorial, we'll seed the database table (DEMO_Book) with a set of predefined data.</li>
      </ul>
      <h3 class="lqp-header">Step 1: Install application</h3>
      <hr class="lqp-header-hr">
      <p>Let's start by cloning and installing the application I mentioned above, open a terminal and run the following commands:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-0">Copy</span>
      </div>
      <pre id='td3-code-0' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code0')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you don't have Git installed, <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/archive/master.zip">click here to download the application.</a></p>
      </div>
      <h3 class="lqp-header">Step 2: Create database</h3>
      <hr class="lqp-header-hr">
      <p>Create a MySQL database, a user and grant the user all privileges on that database (if you are using another database system, use the appropriate commands for that database system). Run the following commands on your MySQL server instance:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-1">Copy</span>
      </div>
      <pre id='td3-code-1' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code1')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> To run MySQL as root from a terminal, use the following command: mysql -uroot -p</p>
      </div>
      <h3 class="lqp-header">Step 3: Configure database connection</h3>
      <hr class="lqp-header-hr">
      <p>Edit <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/config/database.php" target="_blank">app/config/database.php</a> with the database name, username and password that we used in the previous step. It should look something like this:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-2">Copy</span>
      </div>
      <pre id='td3-code-2' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code2')</pre>
      <h3 class="lqp-header">Step 4: Run Laravel migration</h3>
      <hr class="lqp-header-hr">
      <p>Use <a href="http://laravel.com/docs/migrations" target="_blank">Laravel Migrations</a> to create the database tables and seed them. Open a terminal and run the following command in the root directory (./tutorial3/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-3">Copy</span>
      </div>
      <div id='td3-code-3' class="well well-sm lqp-well">php artisan migrate --seed</div>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you changed the database schema or added more data to be seeded, you can use the following command to rollback and re-run all of your migrations: php artisan migrate:refresh --seed</p>
      </div>
      <div id="td3-ads-1" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Step 5: Create toolbar</h3>
      <hr class="lqp-header-hr">
      <p>The first thing we'll do is create an HTML toolbar with buttons and icons for the following commands: add, refresh, export, edit, delete, save and close. For this porpuse we'll use <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a>, <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a> and <a href="http://laravel.com/docs/html" target="_blank">Laravel HTML utilities</a>, open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-4">Copy</span>
      </div>
      <pre id='td3-code-4' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code4')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> You might have noticed in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> script that we are using <a href="http://laravel.com/docs/templates#blade-templating" target="_blank">"Blade Templating"</a>, this allows us to keep our code clean by extending the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/base.blade.php" target="_blank">app/views/base.blade.php</a> where the HTM body, CSS and JavaScript scripts are included.</p>
      </div>
      <p>Now we are going to run the application to see the toolbar. Open a terminal and run the following command in the root directory (./tutorial3/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-5">Copy</span>
      </div>
      <div id='td2-code-5' class="well well-sm lqp-well">php artisan serve</div>
      <p>Open your browser and go to <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> to see your live application. If you click on any button, nothing will happen (which is ok!) because we still haven’t added any logic.</p>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-info-circle fa-lg"></i> Typically, you may use a web server such as Apache or Nginx to serve your Laravel applications however to avoid problems related to server configurations, for this tutorial we’ll be using the Laravel Development Server.</p>
      </div>
      <h3 class="lqp-header">Step 6: Create Books Grid</h3>
      <hr class="lqp-header-hr">
      <p>We'll use <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> to create this grid. The first thing we need to do is use the "GridRender" Facade to create the HTML and JavaScript code of the grid. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section (below the toolbar code) add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-6">Copy</span>
      </div>
      <pre id='td3-code-6' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code6')</pre>
      <p>Not sure of what we just did? don’t worry, here is a brief explanation:</p>
      <ul>
        <li>The method "enableFilterToolbar" (line 4) adds the row you see below the column names in the live demo which allows your users to filter the grid data by column.</li>
        <li>The methods "hideXlsExporter" and "hideCsvExporter" (line 5 and 6) speak by themself however is important to notice that both buttons will be created by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> but they will be hidden, this means that if you want to trigger their functionalities all we have to is called them by their "ID", this is formed using the  "Grid ID" as prefix followed by "XlsButton" in the case of the XLS exporter button and "CsvButton" in the case of the CSV exporter button.</li>
        <li>The method "setGridOption" allows you to set any of the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">options </a> available from the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">jqGrid plugin</a>, note that there is a correspondence in data types which means that if in the documentation the value of an option is set with the boolean type, when using this method you will also set the value of that option using the PHP boolean type.</li>
        <li>The method "addColumn" speaks by itself, however is really important to note that the property "index" of each column correspond with the name of <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">a column of the DEMO_Book table of the database</a>. The correspondence in data types also applies for this method, you can find all available options in the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">jqGrid plugin Colmodel API documentation</a>.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:events&s[]=onselectrow" target="_blank">"onSelectRow" event</a> is executed immediately after a row was clicked. We'll use it to enable the edit and delete buttons. The code to accomplish this will be defined in the "onSelectRowEvent" JavaScript function.</li>
        <li>Notice when adding the column "Language" (line 19) the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:common_rules&s[]=editoptions" target="_blank">"editoptions"</a> has the value "array('value' => 'E:English;S:Spanish;G:German')" and the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:predefined_formatter&s[]=select" target="_blank">"formatter"</a> has the value "select", we do this because in the database we’re not actually storing the name of the languages, we store only one letter and by doing it this way the user will actually see the name of languages instead of just one letter. </li>
      </ul>
      <p>As you noticed in the grid definition, we are making reference to one JavaScript function, open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following JavaScript code into the JavaScript section (this section is located at the beginning of "container" section):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-7">Copy</span>
      </div>
      <pre id='td3-code-7' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code7')</pre>
      <p>The second thing we need to do to make the grid work is to create a "repository class", this class is the one in charge of providing the data to be shown in the grid. Create the file <strong>app/models/BookRepository.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-8">Copy</span>
      </div>
      <pre id='td3-code-8' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code8')</pre>
      <p>Please note:</p>
      <ul>
        <li>Extending the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> (included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>) will make your life easier as it will do all the heavy lifting for you when using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> or <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> to implement your repository class.</li>
        <li>In this case, we are reading only from one table therefore the easiest way to implement the repository class is to use an "Eloquent Model", this is why in the constructor, the class receives an "Eloquent Model" instance as a parameter (for this purpose a <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/models/Book.php" target="_blank">Book Model has already been included in the application)</a>.</li>
        <li>The "visibleColumns” variable contains the columns that will be shown in the grid, this are the ones we define when using the "addColumn" method.</li>
      </ul>
      <p>Now, let's create a route to handle the grid data request. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('url', URL::to('/books-grid))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-9">Copy</span>
      </div>
      <pre id='td3-code-9' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code9')</pre>
      <p>Open your browser and go to <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> to see the grid working, when you click a row is the grid, the edit and delete buttons will be enabled.</p>
      <h3 class="lqp-header">Step 7: Create custom form</h3>
      <hr class="lqp-header-hr">
      <p>We'll use <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a>, <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a> and <a href="http://laravel.com/docs/html" target="_blank">Laravel HTML utilities</a> to create the custom form. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section (below the grid code) add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-10">Copy</span>
      </div>
      <pre id='td3-code-10' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code10')</pre>
      <p>If you open your browser and refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), you won’t see the form because it's hidden so wait until the next step.</p>
      <h3 class="lqp-header">Step 8: Implement client-side logic</h3>
      <hr class="lqp-header-hr">
      <p>The client-side logic consists in implementing the following functionalities: </p>
      <ul>
        <li>Attach  <a href="http://getbootstrap.com/javascript/#tooltips" target="_blank">Bootstrap tooltips</a> to all toolbar buttons</li>
        <li>Validate form using <a href="{{ URL::to('/open-source-development/jquery-mg-validation/getting-started') }}" target="_blank">jQuery MG Validation Plugin</a> when the "Save" button is clicked.</li>
        <li>Hide the grid and show the form when the "New" and "Edit" buttons are clicked.</li>
        <li>Show the grid and hide the form when the close button is clicked.</li>
        <li>Trigger the grid export functionality when the "export" button are clicked.</li>
        <li>Trigger the grid refresh functionality when the "refresh" button is clicked.</li>
        <li>Disable the "New", "refresh", "export", "Edit", "Delete" and enable the "Save" and "Close" button when the form is shown.</li>
        <li>Enable the "New", "refresh", "export", "Edit", "Delete" and disable the "Save" and "Close" button when the grid is shown.</li>
        <li>Send an <a href="http://en.wikipedia.org/wiki/Ajax_(programming)" target="_blank">Ajax</a> request to the server to add a new book or update an existing one when the "Save" button is clicked.</li>
        <li>Show a success message when a book is added, updated or deleted.</li>
        <li>Refresh the grid when a book is added, updated or deleted.</li>
      </ul>
      <p>Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following JavaScript code into the JavaScript section:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-11">Copy</span>
      </div>
      <pre id='td3-code-11' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code11')</pre>
      <p>Open your browser and refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), functionalities mentioned above should be working now. If you try to add, edit or delete a book you'll get an error message, because we still haven't implemented the server-side logic.</p>
      <h3 class="lqp-header">Step 9: Implement server-side logic</h3>
      <hr class="lqp-header-hr">
      <p><a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> does NOT include create, update and delete server-side functionalities, however this can be easily accomplished by using <a href="http://laravel.com/docs/eloquent#insert-update-delete" target="_blank">Eloquent ORM.</a> Create the file <strong>app/models/EloquentBook.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-12">Copy</span>
      </div>
      <pre id='td3-code-12' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code12')</pre>
      <div id="td3-ads-2" style="margin-bottom: 5px;"></div>
      <p>Now, all that is needed is create a route to handle the add, edit and delete requests. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the routes we previously set in the JavaScript code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-13">Copy</span>
      </div>
      <pre id='td3-code-13' class="prettyprint linenums:1">@include('decima-mario-gallegos::tutorials/ljp-demo3/code13')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> I do realize that adding code in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> script is not part of a good application design, I'm doing it this way for simplicity but if you're working on a complex application you should create separate layers of responsibility to handle the server-side code.</p>
      </div>
      <p>All there is left to do is open your browser, refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>) and see the <strong>final result of this tutorial.</strong> You should now be able to add, edit and delete data.</p>
      <div class="alert alert-success" role="alert">
        <p><i class="fa fa-thumbs-o-up fa-lg"></i> Well done, you have completed the tutorial! To boost your learning I recommend you to experiment  with the code, change options and values, add you own code and see what happens. I know that I left a couple of things unexplained (sorry about that) but it's because the tutorial is already too long as it is, however, feel free to leave your questions or comments below and If you found this tutorial useful don’t forget to <a onclick="$('#back-to-top').click();">share it</a>.</p>
      </div>
    </div>
    <div class="tab-pane fade" id="td3-live-demo">

    </div>
  </div>
  <script>
    $(document).ready(function()
    {
      $('#td3-ads-1,#td3-ads-2').append('<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9426377696368258" data-ad-slot="1616020474" data-ad-format="auto"></ins>');
      setTimeout(function()
      {
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
      }, 1000 );
    });
  </script>
@stop
