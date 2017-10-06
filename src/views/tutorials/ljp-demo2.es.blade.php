@extends('tutorials')

@section('twitter')
<meta name="twitter:title" content="Building a CRUD Web App with jqGrid forms using Laravel jqGrid package">
<meta name="twitter:description" content="In this tutorial we'll use jqGrid forms to create a simple CRUD Web App. For this purpose one grid will be created, let's call it Books Grid and jqGrid predefined actions will be used to...">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/tutorials/demo2/750x250.jpg') }}">
@stop

@section('title')
  Building a CRUD Web App with jqGrid forms using Laravel jqGrid package
@stop

@section('date')
   Posted on September 9, 2014
@stop

@section('social')
  {!! Form::social('Building a CRUD Web App with jqGrid forms using #Laravel #jqGrid package', 'http://goo.gl/gZHbGX') !!}
@stop

@section('post')
  <ul class="nav nav-tabs" role="tablist">
    <li class="in active"><a href="#td2-tutorial" role="tab" data-toggle="tab">Tutorial</a></li>
    <li><a href="#td2-live-demo" role="tab" data-toggle="tab" data-tutorial="grid">Live Demo</a></li>
  </ul>
  <div class="tab-content clearfix">
    <div class="tab-pane fade in active clearfix" id="td2-tutorial">
      <p class="first-paragraph">In this tutorial we'll use jqGrid forms to create a simple CRUD Web App. For this purpose one grid will be created, let's call it "Books Grid" and <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator" target="_blank">jqGrid predefined actions</a> will be used to:</p>
      <ul>
        <li>Add a new book.</li>
        <li>Edit selected book.</li>
        <li>View selected book.</li>
        <li>Delete selected book.</li>
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
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a>: this is the php script that we'll be editing in this tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">app/database/migrations/2014_07_20_204757_create_demos_tables.php</a>: this script contains the database schema, for this tutorial we need one database table: DEMO_Book (books will be stored here).</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/BookTableSeeder.php" target="_blank">app/database/seeds/BookTableSeeder.php</a>: to avoid wasting time on unrelated tasks to this tutorial, we'll seed the database table (DEMO_Book) with a set of predefined data.</li>
      </ul>
      <h3 class="lqp-header">Step 1: Install application</h3>
      <hr class="lqp-header-hr">
      <p>Let's start by cloning and installing the application I mentioned above, open a terminal and run the following commands:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-0">Copy</span>
      </div>
      <pre id='td2-code-0' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code0')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you don't have Git installed, <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/archive/master.zip">click here to download the application.</a></p>
      </div>
      <h3 class="lqp-header">Step 2: Create database</h3>
      <hr class="lqp-header-hr">
      <p>Create a MySQL database, a user and grant the user all privileges on that database (if you are using another database system, use the appropriate commands for that database system). Run the following commands on your MySQL server instance:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-1">Copy</span>
      </div>
      <pre id='td2-code-1' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code1')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> To run MySQL as root from a terminal, use the following command: mysql -uroot -p</p>
      </div>
      <h3 class="lqp-header">Step 3: Configure database connection</h3>
      <hr class="lqp-header-hr">
      <p>Edit <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/config/database.php" target="_blank">app/config/database.php</a> with the database name, username and password that we used in the previous step. It should look something like this:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-2">Copy</span>
      </div>
      <pre id='td2-code-2' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code2')</pre>
      <h3 class="lqp-header">Step 4: Run Laravel migration</h3>
      <hr class="lqp-header-hr">
      <p>Use <a href="http://laravel.com/docs/migrations" target="_blank">Laravel Migrations</a> to create the database tables and seed them. Open a terminal and run the following command in the root directory (./tutorial2/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-3">Copy</span>
      </div>
      <div id='td2-code-3' class="well well-sm lqp-well">php artisan migrate --seed</div>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> If you changed the database schema or added more data to be seeded, you can use the following command to rollback and re-run all of your migrations: php artisan migrate:refresh --seed</p>
      </div>
      <div id="td2-ads-1" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Step 5: Create Books Grid</h3>
      <hr class="lqp-header-hr">
      <p>We'll use <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> to create this grid. The first thing we need to do is use the "GridRender" Facade to create the HTML and JavaScript code of the grid. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-4">Copy</span>
      </div>
      <pre id='td2-code-4' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code4')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> You might have noticed in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> script that we are using <a href="http://laravel.com/docs/templates#blade-templating" target="_blank">"Blade Templating"</a>, this allows us to keep our code clean by extending the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/base.blade.php" target="_blank">app/views/base.blade.php</a> where the HTM body, CSS and JavaScript scripts are included.</p>
      </div>
      <p>Not sure of what we just did? don’t worry, here is a brief explanation:</p>
      <ul>
        <li>The method "enableFilterToolbar" (line 3) adds the row you see below the column names in the live demo which allows your users to filter the grid data by column.</li>
        <li>The method "setGridOption" allows you to set any of the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">options available</a> from the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">jqGrid plugin</a>, note that there is a correspondence in data types which means that if in the documentation the value of an option is set with the boolean type, when using this method you will also set the value of that option using the PHP boolean type.</li>
        <li>The method "addColumn" speaks by itself, however is really important to note that the property "index" of each column correspond with the name of <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">a column of the DEMO_Book table of the database</a>. The correspondence in data types also applies for this method, you can find all <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">available options</a> in the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">jqGrid plugin Colmodel API documentation</a>.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options&s[]=editurl" target="_blank">"editurl" option</a> sets the URL for form editing, this means that when we add, edit or delete data, this will be the URL where the server request will be made.</li>
        <li>The <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:form_editing&s[]=aftersubmit" target="_blank">"afterSubmit" event</a> is executed after a response has been received from the server. We'll use it to read the response from the server in order to identify if the transaction was completed successfully or not, note that we are setting the event by module (add, edit and del in line 15, 17 and 18) but the same JavaScript function is being use.  The code to accomplish this will be defined in the "afterSubmitEvent" JavaScript function.</li>
        <li>By default only the view button is showed  in the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator&s[]=navigator" target="_blank">"grid navigator"</a> this is why in line 13 we are enabling the add, edit and delete buttons.</li>
        <li>By default columns are not editable, this why when adding columns we are setting the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:common_rules&s[]=editable" target="_blank">"editable"</a> with the value "true"  so they we'll be included in the add and edit forms.</li>
        <li>Notice when adding the column "Language" (line 24) the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:common_rules&s[]=editoptions" target="_blank">"editoptions"</a> has the value "array('value' => 'E:English;S:Spanish;G:German')" and the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:predefined_formatter&s[]=select" target="_blank">"formatter"</a> has the value "select", we do this because in the database we’re not actually storing the name of the languages, we store only one letter and by doing it this way the user will actually see the name of languages instead of just one letter. Also notice that this column is the only one that we are changing the default value (text) of the option <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:common_rules&s[]=edittype" target="_blank">"edittype"</a> by setting the value "select", by doing this when the form is loaded we'll see an HTML select field instead of an HTML input text field.</li>
        <li>The "addGroupHeader" (line 27) method allows you to <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:groupingheadar" target="_blank">group columns header</a> by adding a row above the chosen columns, as you can see in the live demo the first two columns are grouped.</li>
      </ul>
      <p>As you noticed in the grid definition, we are making reference to one JavaScript function, open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and add the following JavaScript code into the JavaScript section (this section is located at the beginning of "container" section):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-5">Copy</span>
      </div>
      <pre id='td2-code-5' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code5')</pre>
      <p>The second thing we need to do to make the grid work is to create a "repository class", this class is the one in charge of providing the data to be shown in the grid. Create the file <strong>app/models/BookRepository.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-6">Copy</span>
      </div>
      <pre id='td2-code-6' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code6')</pre>
      <p>Please note:</p>
      <ul>
        <li>Extending the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> (included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>) will make your life easier as it will do all the heavy lifting for you when using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> or <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> to implement your repository class.</li>
        <li>In this case, we are reading only from one table therefore the easiest way to implement the repository class is to use an "Eloquent Model", this is why in the constructor, the class receives an "Eloquent Model" instance as a parameter (for this purpose a <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/models/Book.php" target="_blank">Book Model has already been included in the application)</a>.</li>
        <li>The "visibleColumns” variable contains the columns that will be shown in the grid, this are the ones we define when using the "addColumn" method.</li>
      </ul>
      <p>Now, let's create a route to handle the grid data request. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('url', URL::to('/books-grid))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-7">Copy</span>
      </div>
      <pre id='td2-code-7' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code7')</pre>
      <p>Note that we are using the "GridEncoder" Facade, this is a "JSON Data Encoder" included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> that helps you send the data to the grid in the correct format. The method "encodeRequestedData" receives as parameter the "repository class" that we just created.</p>
      <p>Now we are going to run the application to see the grid working. Open a terminal and run the following command in the root directory (./tutorial2/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-8">Copy</span>
      </div>
      <div id='td2-code-8' class="well well-sm lqp-well">php artisan serve</div>
      <p>Open your browser and go to <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> to see your live application. If you click the add, edit or delete button in the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator&s[]=navigator" target="_blank">"grid navigator"</a> a form will be shown however if you try to submit data an error will be shown because we still haven’t coded the server-side logic.</p>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-info-circle fa-lg"></i> Typically, you may use a web server such as Apache or Nginx to serve your Laravel applications however to avoid problems related to server configurations, for this tutorial we’ll be using the Laravel Development Server.</p>
      </div>
      <h3 class="lqp-header">Step 6: Implement server-side logic</h3>
      <hr class="lqp-header-hr">
      <p><a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> does NOT include create, update and delete server-side functionalities, however this can be easily accomplished by using <a href="http://laravel.com/docs/eloquent#insert-update-delete" target="_blank">Eloquent ORM.</a> Create the file <strong>app/models/EloquentBook.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-9">Copy</span>
      </div>
      <pre id='td2-code-9' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code9')</pre>
      <div id="td2-ads-2" style="margin-bottom: 5px;"></div>
      <p>Now, all that is needed is create a route to handle the add, edit and delete requests. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('editurl',URL::to('/crud'))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-10">Copy</span>
      </div>
      <pre id='td2-code-10' class="prettyprint linenums:1">@include('tutorials/ljp-demo2/code10')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> I do realize that adding code in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> script is not part of a good application design, I'm doing it this way for simplicity but if you're working on a complex application you should create separate layers of responsibility to handle the server-side code.</p>
      </div>
      <p>Please note:</p>
      <ul>
        <li>When the data is posted by the grid, it includes the variable "oper" (line 5), the value of this variable helps you identify the type of transaction (add, edit or delete) that is taking place.</li>
        <li>The property "index" is also used for the attribute "name" of form elements, this is how when the data is posted you can identify the value of each database column when adding, editing or deleting data.</li>
      </ul>
      <p>All there is left to do is open your browser, refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>) and see the <strong>final result of this tutorial.</strong> When you click the <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator&s[]=navigator" target="_blank">"grid navigator"</a> buttons a form will be shown and you should now be able to add, edit and delete data.</p>
      <div class="alert alert-success" role="alert">
        <p><i class="fa fa-thumbs-o-up fa-lg"></i> Well done, you have completed the tutorial! To boost your learning I recommend you to experiment  with the code, change options and values, add you own code and see what happens. I know that I left a couple of things unexplained (sorry about that) but it's because the tutorial is already too long as it is, however, feel free to leave your questions or comments below and If you found this tutorial useful don’t forget to <a onclick="$('#back-to-top').click();">share it</a>.</p>
      </div>
    </div>
    <div class="tab-pane fade" id="td2-live-demo" style = "margin-bottom: 20px;">
      @include('oss-dev/laravel-jqgrid/demo2')
    </div>
  </div>
  {!! Form::comments(2) !!}
  <script>
    $(document).ready(function()
    {
      $('#td2-ads-1,#td2-ads-2').append('<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9426377696368258" data-ad-slot="1616020474" data-ad-format="auto"></ins>');
      setTimeout(function()
      {
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
      }, 1000 );
    });
  </script>
@stop
