@extends('tutorials')

@section('twitter')
<meta name="twitter:title" content="Contruyendo una apliación web CRUD con un formulario personalizado usando el paquete jqGrid de Laravel">
<meta name="twitter:description" content="En este tutorial vamos a usar un formulario personalizado para crear una aplicación web CRUD simple. Para este proposito se creará una grid, vamos a llamarla Grid de Libros y los botonoes personalizados ser usarán para...">
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
      <p class="first-paragraph">En este tutorial vamos a usar un formulario personalizado para crear una aplicación web CRUD simple. Para este propósito se creará un grid, vamos a llamarlo "Grid de Libros" y los botones personalizados se usarán para:</p>
      <ul>
        <li>Agregar un nuevo libro.</li>
        <li>Editar el libro seleccionado.</li>
        <li>Borrar el libro seleccionado</li>
        <li>Refrescar el grid.</li>
        <li>Exportar datos.</li>
      </ul>
      <h3 class="lqp-header">Requisitos</h3>
      <hr class="lqp-header-hr">
      <ul>
        <li>
          <a href="http://php.net/" target="_blank">PHP 5.4 o superior</a>
        </li>
        <li>
          <a href="http://php.net/manual/en/book.mcrypt.php" target="_blank">Extensión MCrypt de PHP</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation#install-composer" target="_blank">Composer</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation" target="_blank">Laravel 4 Framework</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/database" target="_blank">MySQL o cualquier otro systema de base de datos soportado por Laravel</a>
        </li>
        <li>
          <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Paquete jqGrid para Laravel</a>
        </li>
        <li>
          <a href="http://jquery.com/" target="_blank">jQuery v2.0.0 o superior</a>
        </li>
        <li>
          <a href="https://raw.githubusercontent.com/flesler/jquery.scrollTo/master/jquery.scrollTo.min.js" target="_blank">jQuery ScrollTo</a>
        </li>
        <li>
          <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">Un tema de su elección para la UI de jQuery</a>
        </li>
        <li>
          <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Core</a>
        </li>
        <li>
          <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Shake</a>
        </li>
        <li>
          <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin v4.6.0 o superior</a>
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
      <p>He armado una <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">apliación de Laravel</a>
        que cumple los requisitos mencionados arriba (excepto por PHP, Composer y el sistema de base de datos, claro esta) para que sea más fácil para ustedes seguir el tutorial (si usted quiere puede usar su propia apliación sientase libre de saltarse el paso 1). La <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">aplicación</a> contiene los siguientes archivos importantes:</p>
      <ul>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a>: este es el script php que vamos a estar editando en este tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/public/assets/tutorial/css/main.css" target="_blank">public/assets/tutorial/css/main.css</a>: contiene clases CSS personalizadas usadas en este tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/public/assets/tutorial/js/helpers.js" target="_blank">public/assets/tutorial/js/helpers.js</a>: contiene las funciones JavaScript usadas en este tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">app/database/migrations/2014_07_20_204757_create_demos_tables.php</a>: este script contiene el esquema de la base de datos, para este tutorial vamos a necesitar una tabla en la base de datos: DEMO_Book (los libros se almacenarán aqui).</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/BookTableSeeder.php" target="_blank">app/database/seeds/BookTableSeeder.php</a>: para evitar desperdiciar tiempo en tareas no relacionadas a este tutorial, vamos a hacer seed a la tabla de la base de datos (DEMO_Book) con un conjunto de datos predefinidos.</li>
      </ul>
      <h3 class="lqp-header">Paso 1: Instalar la aplicación</h3>
      <hr class="lqp-header-hr">
      <p>Empecemos por clonar e instalar la apliación ya mencionada, abra una terminal y ejecute los siguientes comandos:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-0">Copiar</span>
      </div>
      <pre id='td3-code-0' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code0')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Si usted no tiene Git instalado, <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/archive/master.zip">haga click aquí para descargar la aplicación.</a></p>
      </div>
      <h3 class="lqp-header">Paso 2: Crear la base de datos</h3>
      <hr class="lqp-header-hr">
      <p>Cree una base de datos en MySQL, un usuario y concedale todos los privilegios en esa base de datos (si usted esta usando otro systema de base de datos, use los comandos apropiados para ese sistema de base de datos). Ejecute los siguientes comandos en la instancia de su servidor MySQL:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-1">Copiar</span>
      </div>
      <pre id='td3-code-1' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code1')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Para ejecutar MySQL como usuario root desde la terminal, use el siguiente comando: mysql -uroot -p</p>
      </div>
      <h3 class="lqp-header">Paso 3: Configure la conexión a la base de datos</h3>
      <hr class="lqp-header-hr">
      <p>Edita <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/config/database.php" target="_blank">app/config/database.php</a> con el nombre de la base de datos, nombre de usuario y contraseña que usamos en el paso anterior. Debería de verse parecido a esto:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-2">Copiar</span>
      </div>
      <pre id='td3-code-2' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code2')</pre>
      <h3 class="lqp-header">Paso 4: Ejecuta la migración de Laravel</h3>
      <hr class="lqp-header-hr">
      <p>Use <a href="http://laravel.com/docs/migrations" target="_blank">Laravel Migrations</a> para crear las tablas de la base de datos y hacerles seed. Abra una terminal y ejecute el siguiente comando en su directorio raíz (./tutorial3/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-3">Copiar</span>
      </div>
      <div id='td3-code-3' class="well well-sm lqp-well">php artisan migrate --seed</div>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Si usted cambió el esquema de la base de datos o agregó más datos para hacer seed, puede usar el siguiente comando para hacer rollback y volver a ejecutar todas sus migraciones: php artisan migrate:refresh --seed</p>
      </div>
      <div id="td3-ads-1" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Paso 5: Crear el toolbar</h3>
      <hr class="lqp-header-hr">
      <p>La primera cosa que necesitamos hacer es crear una toolbar HTML con botones e íconos para las siguientes acciones: agregar, refrescar, exportar, editar, eliminar, guardar y cerrar. Para este propósito vamos a usar <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a>, <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a> y <a href="http://laravel.com/docs/html" target="_blank">las utilidades HTML de Laravel</a>, abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y adentro de la sección "container" agregue el siguiente código:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-4">Copiar</span>
      </div>
      <pre id='td3-code-4' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code4')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Como habrán notado en el <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> script que estamos usando <a href="http://laravel.com/docs/templates#blade-templating" target="_blank">"Blade Templating"</a>, esto nos permite mantener nuestro código limpio al extender el <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/base.blade.php" target="_blank">app/views/base.blade.php</a> donde el cuerpo HTM, CSS y los scripts JavaScripti estan incluidos.</p>
      </div>
      <p>Ahora vamos a ejecutar la apliación para ver el toolbar. Abra una terminal y ejecute el siguiente comando en el directorio raíz (./tutorial3/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td2-code-5">Copiar</span>
      </div>
      <div id='td2-code-5' class="well well-sm lqp-well">php artisan serve</div>
      <p>Abra su navegador y vaya a <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> para ver su apliación en vivo. Si hace click en cualquier otro botón, nada va a pasar (Lo que está bien!) porque todavía no le hemos agregado ninguna lógica.</p>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-info-circle fa-lg"></i> Típicamente, usted usará un servidor web como Apache o Nginx para servir a su apliación Laravel sin embargo para evitar problemas relacionados a la configuración del servidor, para este tutorial vamos a usar el Laravel Development Server.</p>
      </div>
      <h3 class="lqp-header">Paso 6: Crear la Grid de Libros</h3>
      <hr class="lqp-header-hr">
      <p>Vamos a usar el <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">paquete jqGrid de Laravel</a> para crear esta grid. La primera cosa que necesitamos hacer es usar la Facade "GridRender" para crear el código HTML y el código JavaScript de la grid. Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y dentro de la sección "container" (bajo el código del toolbar) agregue el siguiente código:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-6">Copiar</span>
      </div>
      <pre id='td3-code-6' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code6')</pre>
      <p>No estan seguros de lo que acabamos de hacer? no se preocupen, aquí hay una breve expliación:</p>
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
        <span class="btn-clipboard" data-clipboard-target="td3-code-7">Copiar</span>
      </div>
      <pre id='td3-code-7' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code7')</pre>
      <p>The second thing we need to do to make the grid work is to create a "repository class", this class is the one in charge of providing the data to be shown in the grid. Create the file <strong>app/models/BookRepository.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-8">Copiar</span>
      </div>
      <pre id='td3-code-8' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code8')</pre>
      <p>Please note:</p>
      <ul>
        <li>Extending the class <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> (included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>) will make your life easier as it will do all the heavy lifting for you when using <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> or <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> to implement your repository class.</li>
        <li>In this case, we are reading only from one table therefore the easiest way to implement the repository class is to use an "Eloquent Model", this is why in the constructor, the class receives an "Eloquent Model" instance as a parameter (for this purpose a <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/models/Book.php" target="_blank">Book Model has already been included in the application)</a>.</li>
        <li>The "visibleColumns” variable contains the columns that will be shown in the grid, this are the ones we define when using the "addColumn" method.</li>
      </ul>
      <p>Now, let's create a route to handle the grid data request. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the route we previously set (setGridOption('url', URL::to('/books-grid))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-9">Copiar</span>
      </div>
      <pre id='td3-code-9' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code9')</pre>
      <p>Open your browser and go to <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> to see the grid working, when you click a row is the grid, the edit and delete buttons will be enabled.</p>
      <h3 class="lqp-header">Step 7: Create custom form</h3>
      <hr class="lqp-header-hr">
      <p>We'll use <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a>, <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a> and <a href="http://laravel.com/docs/html" target="_blank">Laravel HTML utilities</a> to create the custom form. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> and inside the "container" section (below the grid code) add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-10">Copiar</span>
      </div>
      <pre id='td3-code-10' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code10')</pre>
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
        <span class="btn-clipboard" data-clipboard-target="td3-code-11">Copiar</span>
      </div>
      <pre id='td3-code-11' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code11')</pre>
      <p>Open your browser and refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), functionalities mentioned above should be working now. If you try to add, edit or delete a book you'll get an error message, because we still haven't implemented the server-side logic.</p>
      <h3 class="lqp-header">Step 9: Implement server-side logic</h3>
      <hr class="lqp-header-hr">
      <p><a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a> does NOT include create, update and delete server-side functionalities, however this can be easily accomplished by using <a href="http://laravel.com/docs/eloquent#insert-update-delete" target="_blank">Eloquent ORM.</a> Create the file <strong>app/models/EloquentBook.php</strong> and add the following code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-12">Copiar</span>
      </div>
      <pre id='td3-code-12' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code12')</pre>
      <div id="td3-ads-2" style="margin-bottom: 5px;"></div>
      <p>Now, all that is needed is create a route to handle the add, edit and delete requests. Open <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> and add the following code to define the routes we previously set in the JavaScript code:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td3-code-13">Copiar</span>
      </div>
      <pre id='td3-code-13' class="prettyprint linenums:1">@include('tutorials/ljp-demo3/code13')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> I do realize that adding code in the <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> script is not part of a good application design, I'm doing it this way for simplicity but if you're working on a complex application you should create separate layers of responsibility to handle the server-side code.</p>
      </div>
      <p>All there is left to do is open your browser, refresh the page (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>) and see the <strong>final result of this tutorial.</strong> You should now be able to add, edit and delete data.</p>
      <div class="alert alert-success" role="alert">
        <p><i class="fa fa-thumbs-o-up fa-lg"></i> Well done, you have completed the tutorial! To boost your learning I recommend you to experiment  with the code, change options and values, add you own code and see what happens. I know that I left a couple of things unexplained (sorry about that) but it's because the tutorial is already too long as it is, however, feel free to leave your questions or comments below and If you found this tutorial useful don’t forget to <a onclick="$('#back-to-top').click();">share it</a>.</p>
      </div>
    </div>
    <div class="tab-pane fade" id="td3-live-demo">
      @include('oss-dev/laravel-jqgrid/demo3')
    </div>
  </div>
  {!! Form::comments(3) !!}
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
