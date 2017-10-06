@extends('tutorials')

@section('twitter')
<meta name="twitter:title" content="Construcción de un Pivot Grid y manejo de eventos jqGrid usando el paquete jqGrid para Laravel">
<meta name="twitter:description" content="En este tutorial vamos a simular una página resumen de un negocio de tamaño mediano, mostrando todas las facturas emitidas por el negocio y un resumen de las ventas de productos por categoría y por país...">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/tutorials/demo1/750x250.jpg') }}">
@stop

@section('title')
  Construyendo un Pivot Grid y manejando eventos de jqGrid utilizando el paquete Laravel jqGrid
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
      <p class="first-paragraph">En este tutorial vamos a simular una página resumen de un negocio de tamaño mediano, mostrando todas las facturas emitidas por el negocio y un resumen de las ventas de productos por categoría y por país. Para este propósito se crearan tres grids (cuadrículas):</p>
      <ul>
        <li><strong>Grid de Facturas:</strong> muestra todas las facturas emitidas por el negocio.</li>
        <li><strong>Grid de Artículos de la Factura:</strong> muestra los artículo de la factura seleccionada en “Grid de Facturas”.</li>
        <li><strong>Grid de Resumen de Ventas:</strong> muestra cuanto ha sido vendido en cada país por “Categoria” y por “Nombre de Producto”.</li>
      </ul>
      <h3 class="lqp-header">Requisitos</h3>
      <hr class="lqp-header-hr">
      <ul>
        <li>
          <a href="http://php.net/" target="_blank">PHP 5.4 o posterior</a>
        </li>
        <li>
          <a href="http://php.net/manual/en/book.mcrypt.php" target="_blank">Extensión MCrypt para PHP</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation#install-composer" target="_blank">Composer</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/installation" target="_blank">Framework Laravel 4</a>
        </li>
        <li>
          <a href="http://laravel.com/docs/database" target="_blank">MySQL o cualquier otro sistema de bases de datos soportado por Laravel</a>
        </li>
        <li>
          <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Paquete jqGrid para Laravel</a>
        </li>
        <li>
          <a href="http://jquery.com/" target="_blank">jQuery v2.0.0 o posterior</a>
        </li>
        <li>
          <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">Un tema de su elección para la interfaz de jQuery</a>
        </li>
        <li>
          <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid Plugin v4.6.0 o posterior</a>
        </li>
      </ul>
      <p>He juntado una <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">aplicación de Laravel </a> que cumple con los requisitos anteriores (exceptuando por supuesto a PHP, Composer y un sistema de bases de datos) para que les sea más fácil seguir el tutorial (si desean utilizar su propia aplicación siéntanse libres de saltarse el paso 1). La <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial" target="_blank">aplicación</a> contiene los siguientes archivos importantes:</p>
      <ul>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a>: Este es el cript de php que vamos a estar editando en este tutorial.</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">app/database/migrations/2014_07_20_204757_create_demos_tables.php</a>: Este script contiene el esquema de la base de datos, para este tutorial necesitaremos dos tablas en la base de datos: DEMO_Invoice (las facturas se almacenarán aquí) y DEMO_Invoice_Item (los artículos de las facturas serán almacenados aquí).</li>
        <li><a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/InvoiceTableSeeder.php" target="_blank">app/database/seeds/InvoiceTableSeeder.php</a> y <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/seeds/InvoiceItemTableSeeder.php" target="_blank">app/database/seeds/InvoiceItemTableSeeder.php</a>: para evitar perder tiempo en tareas no relacionadas a este tutorial, se hará seed a ambas tablas (DEMO_Invoice y DEMO_Invoice_Item) con un conjunto de datos predefinidos.</li>
      </ul>
      <h3 class="lqp-header">Paso 1: Instalar la aplicación</h3>
      <hr class="lqp-header-hr">
      <p>Empecemos por clonar e instalar la aplicación que mencioné anteriormente, abran una terminal y ejecuten los siguientes comandos:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-0">Copiar</span>
      </div>
      <pre id='td1-code-0' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code0')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Si no tienes Git instalado, <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/archive/master.zip">has click aquí para descargar la aplicación.</a></p>
      </div>
      <h3 class="lqp-header">Paso 2: Crea la base de datos</h3>
      <hr class="lqp-header-hr">
      <p>Crea una base de datos de MySQL, un usuario y otorgale al usuario todos los privilegios en esa base de datos (si usted está usando otro sistema de bases de datos, use los comandos apropiados para ese sistema). Ejecute los siguintes comandos en su instancia de MySQL server:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-1">Copiar</span>
      </div>
      <pre id='td1-code-1' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code1')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Para ejecuar MySQL como root desde la terminal, use el siguiente comando: mysql -uroot -p</p>
      </div>
      <h3 class="lqp-header">Paso 3: Configure la conección a la base de datos</h3>
      <hr class="lqp-header-hr">
      <p>Edite <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/config/database.php" target="_blank">app/config/database.php</a> con el nombre de la base de datos, nombre de usuario y la contraseña que usamos en el paso anterior. Debería de verse parecido a esto:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-2">Copiar</span>
      </div>
      <pre id='td1-code-2' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code2')</pre>
      <h3 class="lqp-header">Paso 4: Ejecutar la migración de Laravel</h3>
      <hr class="lqp-header-hr">
      <p>Use <a href="http://laravel.com/docs/migrations" target="_blank">Laravel Migrations</a> para crear la tabla de la base de datos y hacerles seed. Abrir la terminal y ejecutar el siguiente comando en el directorio raíz (./tutorial1/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-3">Copiar</span>
      </div>
      <div id='td1-code-3' class="well well-sm lqp-well">php artisan migrate --seed</div>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Si usted cambió el esquema de la base de datos o agregó más datos para hacer seed, puede usar el siguiente comando para hacer rollback (retroceso) y volver a ejecutar todas sus migraciones: php artisan migrate:refresh --seed</p>
      </div>
      <div id="td1-ads-1" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Paso 5: Crear el Grid de Facturas</h3>
      <hr class="lqp-header-hr">
      <p>Vamos a usar <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">el paquete jqGrid para Laravel</a> para crear todos las Grid en este tutorial. Lo primero que necesitamos hacer es usar la Facade "GridRender" para crear el código HTML y JavaScript de la grid. Abrir el archivo <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y dentro de la sección "container" agregamos lo siguiente:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-4">Copiar</span>
      </div>
      <pre id='td1-code-4' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code4')</pre>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-lightbulb-o  fa-lg"></i> Como habrán notado en el <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> script que estamos usando <a href="http://laravel.com/docs/templates#blade-templating" target="_blank">"Blade Templating"</a>, esto nos permite mantener nuestro código ordenado mediante la extensión de <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/base.blade.php" target="_blank">app/views/base.blade.php</a> donde el cuerpo HTML, los scripts CSS y JavaScript estan incluidos.</p>
      </div>
      <p>¿No están seguros de lo que acabamos de hacer? no se preocupen, aquí hay una breve explicación:</p>
      <ul>
        <li>El método "enableFilterToolbar" (línea 3) agrega la fila que se observa sobre la columna nombres en el live demo la cual permite a los usuarios filtrar los datos de la Grid por columna.</li>
        <li>El método "setGridOption" te premite establecer cualquiera de las--<a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">opciones disponibles</a> desde el <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options" target="_blank">plugin jqGrid</a>, tome en cuenta que ha una correspondencia e los tipos de datos lo que significa que si en la documentación el valor de una opción se establece como boolean, cuando se este usando este método también se tendrá que establecer el valor de esa opción usando el tipo booleando de PHP.</li>
        <li>El método "addColumn" habla por sí mismo, sin embargo es muy importante tomar nota que la propiedad "index" de cada columna corresponde con el nombre de <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/database/migrations/2014_07_20_204757_create_demos_tables.php" target="_blank">una columna de la tabla DEMO_Book de la base de datos</a>. La correspondencia en los tipos de datos también aplica para este método, usted puede encontrar todas las <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">opciones disponibles</a> en la <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options" target="_blank">documentación del plugin Colmodel API para jqGrid</a>.</li>
      </ul>
      <p>La segunda cosa que necesitamos hace para que la grid funcione es crear una "clase repositorio", esta clase es la que esta acargo de proveer los datos que serán mostrados en la grid. Crea el archivo <strong>app/models/InvoiceRepository.php</strong> y agrega el siguite bloque de código:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-5">Copiar</span>
      </div>
      <pre id='td1-code-5' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code5')</pre>
      <p>Tenga en cuenta que:</p>
      <ul>
        <li>Expandir la clase <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> (included by the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package</a>) te hará la vida más fácil ya que hará todo el trabajo por ti cuando uses <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> o <a href="http://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a> para implementar tu clase repositorio.</li>
        <li>En este caso, solamente estamos leyendo desde una tabla por lo tanto la manera más fácil de implementar la clase reṕositorio es usando un "Eloquent Model", es por esto que en el constructor, la clase recive una instancia "Eloquent Model" como parámetro (para este propósito un <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/models/Invoice.php" target="_blank">modelo de factura "Invoice Model" ya ha sido incluido en la aplicación)</a>.</li>
        <li>La variable "visibleColumns” contiene las columnas que se van a mostrar en el grid, estas son las que definimos usando el método "addColumn".</li>
      </ul>
      <p>Ahora, todo lo que se necesita es crear una ruta para manejar la petición de datos del grid. Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> y agregue el siguiente código para definir la ruta que establecimos anteriormente (setGridOption('url', URL::to('/invoice-grid'))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-6">Copiar</span>
      </div>
      <pre id='td1-code-6' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code6')</pre>
      <p>Note que estamos usando la Facade "GridEncoder",esto es un "JSON Data Encoder" incluido en el <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">paquete jqGrid de Laravel</a> el cal nos ayuda a enviar los datos al grid en el formato correcto. El método "encodeRequestedData" recibe como parámtero  la "clase repositorio" (repository class) que acabamos de crear.</p>
      <p>Ahora vamos a ejecutar la aplicación para ver nuestra primera grid funcionando. Abre una terminal y ejecua el siguiente comando en el directorio raíz (./tutorial1/):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-7">Copiar</span>
      </div>
      <div id='td1-code-7' class="well well-sm lqp-well">php artisan serve</div>
      <p>Abre tu navegador y ve a <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> para ver tu aplicación en vivo.</p>
      <div class="alert alert-info" role="alert">
        <p><i class="fa fa-info-circle fa-lg"></i> Típicamente, puedes usar un servidor web como Apache o Ngnix para atender tus aplicaciones de Laravel sin embargo para evitar problemas relacionados con configuraciones del servidor, en este tutorial se estará usando "Laravel Development Server".</p>
      </div>
      <h3 class="lqp-header">Step 6: Crear el Grid de las Facturas de Artículos</h3>
      <hr class="lqp-header-hr">
      <p>Vamos a usar esta grid para mostrar los artículos de las facturas seleccionadas en la "Grid de Facturas". Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y agregue el siguiente código debajo del código de la "Grid de Facturas":</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-8">Copiar</span>
      </div>
      <pre id='td1-code-8' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code8')</pre>
      <p>Tenga en cuenta:</p>
      <ul>
        <li>El valor de la opción "postData" es un truco que estamos usando para eviar cargar datos la primera vez que el grid hace la petición al server, lo que estamos haciendo es simular lo que pasa cuando alguien usa manualmente "filter toolbar" para filtrar el grid de datos por columna. Le estamos asignando el valor de "-1" al campo de búsqueda de la columna "DEMO_Invoice.id" (Usted no erá esta columna porque esta oculta) para asegurarse qe ningún dato sea cargado.</li>
        <li>El <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:events&s[]=loadcomplete" target="_blank">evento "loadComplete"</a> es ejecuado inmediatamente desdpués de cada petición al servidor. Vamos a usarla para llenar la fila "footer" (es visible cuando la opción "footerrow" esta establecida como true) con el "Total de Facturas", el código para llevar a cabo estoserá definido en la función JavaScript "onLoadCompleteEvent".</li>
        <li>El <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:toolbar_searching&s[]=beforeclear" target="_blank">evento filtro del toolbar "beforeClear"</a> es ejecutado antes de despejar los datos de los elementos de búsqueda. Aquí usaremos el truco "postData" pero en este caso para cargar los datos del "Invoce ID" (Factura ID) seleccionado, el código para llevar a cabo esto será definido en la función JavaScript "beforeClearEvent".</li>
        <li>El <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:toolbar_searching&s[]=afterclear" target="_blank">evento filtro "afterClear" del toolbar</a> es ejecutado luego de limpiar los datos de los elementos de búsqueda. Vamos a establecer el "ID" de la fila seleccionada (de la "Grid de Facturas") en el campo de búsqueda de la columna "InvoideId" que como se puede observar en su columna de definición esta oculto. Al hacer esto cuando el usuario realiza una búsqueda usando el filtro del toolbar, el valor del camṕo de búsqueda de la columna "InvoiceId" será incluido en la búsqueda, el código para llevar a cabo esto será definido en la función JavaScript "afterClearEvent".</li>
        <li>Las primeras dos columnas que estamos agregando ("Invoice #" y "Description") tienen la opción "frozen" establecida como cierta (true), esto significa que si la suma del ancho de las columnas del grid es mayor que el ancho del grid, un scroll horizontal aparecerá pero estas dos columnas no se moverán.</li>
      </ul>
      <p>Como habrán notado en la definición del grid, estamos haciendo referencia a tres funciones JavaScript, abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y agregue el siguiente código JavaScript en la sección JavaScript (esta sección es ubicada al inicio de la sección "container"):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-9">Copiar</span>
      </div>
      <pre id='td1-code-9' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code9')</pre>
      <p>Ahora, vamos a crear el "repository class" para esta grid. Crea el archivo <strong>app/models/InvoiceItemRepository.php</strong> y agrega el siguiente código:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-10">Copiar</span>
      </div>
      <pre id='td1-code-10' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code10')</pre>
      <p>Observe que otra vez estamos extediendo la clase <a href="https://github.com/mgallegos/laravel-jqgrid/blob/master/src/Mgallegos/LaravelJqgrid/Repositories/EloquentRepositoryAbstract.php" target="_blank">EloquentRepositoryAbstract</a> pero en este caso estamos usando <a href="http://laravel.com/docs/queries" target="_blank">Query Builder</a> porque estamos leyendo desde más de una tabla (DEMO_Invoice and DEMO_Invoice_Item) esta es la razón por la que la clase constructor recive una insancia "DatabaseManager" (esta es la clase detrás del <a href="http://laravel.com/docs/facades#facade-class-reference" target="_blank">Laravel DB Facade</a>).</p>
      <p>Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/routes.php" target="_blank">app/routes.php</a> y agregue el siguiente código para definir la ruta que esablecimos anteriormente (setGridOption('url', URL::to('/invoice-item-grid'))):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-11">Copiar</span>
      </div>
      <pre id='td1-code-11' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code11')</pre>
      <p>Ahora, abra su navegador y refresque la página (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), ahora debería ver una segunda <strong>grid vacía.</strong></p>
      <h3 class="lqp-header">Paso 7: Enlazar el evento onSelectRow a la Grid de Facturas</h3>
      <hr class="lqp-header-hr">
      <p>Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y agregue la siguiente línea al código de definición de "Invoice Grid" (puede agegrla en cualquier posición siempre y cuando sea antes del método "renderGrid"):</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-12">Copiar</span>
      </div>
      <div id='td1-code-12' class="well well-sm lqp-well">->setGridEvent('onSelectRow', 'onSelectRowEvent')</div>
      <p>Dentro del mismo script agrega el siguiente código JavaScript en la sección JavaScript:</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-13">Copiar</span>
      </div>
      <pre id='td1-code-13' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code13')</pre>
      <p>Ahora, abra su navegador y refresque la página (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>), cuando
        usted haga click en una factura de la primera grid, debería de ver sus artículos cargados en la segunda grid, pruebe usar el filtro toolbar la "Grid de Artículos de la factura" y notará que su busqueda siempre será realizada con los artículos de la factura seleccionada.</p>
      <div id="td1-ads-2" style="margin-bottom: 5px;"></div>
      <h3 class="lqp-header">Paso 8: Crea la Grid Resumen de Ventas (Pivot Grid)</h3>
      <hr class="lqp-header-hr">
      <p>Una Pivot Grid es una gran herramienta que permite organizar y resumir columnas y filas de datos seleccionados. Vamos a usar esa grid para mostrar cuanto ha sido vendido en cada país por "Categoria" y por "Nombre de Producto".
        Abra <a href="https://github.com/mgallegos/laravel-jqgrid-tutorial/blob/master/app/views/tutorial.blade.php" target="_blank">app/views/tutorial.blade.php</a> y agregue el siguiente código debajo del códgio de "Grid de Artículos de Factura":</p>
      <div class="zero-clipboard">
        <span class="btn-clipboard" data-clipboard-target="td1-code-14">Copiar</span>
      </div>
      <pre id='td1-code-14' class="prettyprint linenums:1">@include('tutorials/ljp-demo1/code14')</pre>
      <p>Tenga en cuenta:</p>
      <ul>
        <li>En este caso, estamos apuntando a la misma URL (setGridOption('url',URL::to('/invoice-item-grid'))) que la "Grid Arículos de Factura", esto significa que estamos usando la misma "clase repositorio", esta clase provee toda la información que necesitamos para creear la "Pivot Grid", si observan con atención el <strong>app/models/InvoiceRepository.php</strong> verán que lo que tenemos ahí es una unión entre las tablas "DEMO_Invoice" y "DEMO_Invoice_Item", como resultado para cada fila tenemos "Product Caegory", "Product Description", "Invoice Total by product (total column)" y "Country", hay más datos pero simplemento no los necesitamos asi que serán ignorados. La lógica usada por <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">el plugin jqGrid para construir un "Pivot Grid"</a> es la misma que, por ejemplo, LibreOffice Calc or Microsoft Excel.</li>
        <li>Cuando se trabaje con <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grids"</a> es necesario usar el método "setGridAsPivot()", esto le dirá al <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">paquete jqGrid de Laravel</a> que maneje el grid como un <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grid"</a> n vez de un grid regular.</li>
        <li>Las opciones "rowTotals",  "colTotals",  "groupSummaryPos" son  <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotsettings" target="_blank">"opciones de Pivot Grid"</a>, sin embargo, puede seguir usando el método "setGridOption()" para establecer el valor para esas opciones.</li>
        <li>Cuando se trabaje con <a href="http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pivotdescription" target="_blank">"Pivot Grids"</a> el método "addColumn" no tiene ningún efecto, en lugar de eso hay que usar los siguientes métodos: "addXDimension()", "addYDimension()", "addAggregate()". </li>
        <li>Donde estamos agregando dos "X dimension" lo que significa que vamos a tener una columna para "Category" y "Product Description", los productos serán agrupados por categoría, y para cada producto diferente vendido por país se creará una fila.  Agregar "Country" como "Y dimension" significa que una columna será creada para cada diferente país dentro de la fuente de datos. Y por agregar un "SUM agreggator" una fila será agregada totalizando cuánto se ha vendido por categoría en cada país.</li>
        <li>Cuando agreguemos dimensiones al valor de la propiedad "dataName" debe coincidir con el nombre de la columna de la tabla de su base de datos y en caso de agregardos es la propiedad "member" la que debe coincidir.</li>
      </ul>
      <p>Como se explicó arrba,nosotros no estamos creando una diferente "repository class" para esta grid, asi que todo lo que queda por hacer es abrir el avegador, refrescar la página (<a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a>) y ver el <strong>resultado final de este tutorial.</strong></p>
      <div class="alert alert-success" role="alert">
        <p><i class="fa fa-thumbs-o-up fa-lg"></i> Bien hecho, usted ha completado el tutorial! Para incrementar su aprendizaje yo recomiendo que experimenten con el código, cambien opciones y valores, agreguen su propio código y vean qué pasa. Yo sé que dejé un par de cosas sin explicar (perdón por eso) pero siento que este tutorial ya es demasido largo tal y como esta, sin embargo, sientanse libres de dejar sus comentarios o preguntas en la parte de abajo y si el tutorial les pareció útil no se olviden de <a onclick="$('#back-to-top').click();">compartirlo</a>.</p>
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
