<?php

/**
 * @file
 * Application Routes.
 *
 * All DecimaModule code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('middleware' => array('auth', 'check.first.time.access', 'check.access', 'csrf'), 'prefix' => 'module/setup'), function()
{
	// Route::controller('/initial-accounting-setup', 'Mgallegos\DecimaAccounting\Accounting\Controllers\SettingManager');
});

// Route::get('/', function()
// {
// 	// if(Request::getHost() == 'www.decimaerp.com' || Request::getHost() == 'decimaerp.com')
// 	// {
// 	// 	return Redirect::to('http://www.mariogallegos.com/open-source-development/decima-erp/getting-started');
// 	// }
//
// 	return Redirect::to('open-source-development/laravel-jqgrid/getting-started');
// });

// Route::group(array('prefix' => 'blog'), function()
// {
// 	Route::get('/', function()
// 	{
// 		return View::make('decima-mario-gallegos::blog')
// 						->with('blog', 'block')
// 						->with('blogPost', 'none');
// 	});
//
// 	Route::get('/oss-experience', function()
// 	{
// 		return View::make('decima-mario-gallegos::blog/oss-experience')
// 						->with('blog', 'none')
// 						->with('blogPost', 'block');
// 	});
//
// 	Route::get('/free-software-terms', function()
// 	{
// 		return View::make('decima-mario-gallegos::blog/free-software-terms')
// 						->with('blog', 'none')
// 						->with('blogPost', 'block');
// 	});
// });

// Route::group(array('prefix' => '/cms/tutorials'), function()
// {
// 	Route::get('/', function()
// 	{
// 		return View::make('decima-mario-gallegos::tutorials')
// 						->with('tutorials', 'block')
// 						->with('tutorialPost', 'none');
// 	});
//
// 	Route::get('/pivot-grid', function()
// 	{
// 		return View::make('decima-mario-gallegos::tutorials/ljp-demo1')
// 						->with('tutorials', 'none')
// 						->with('tutorialPost', 'block');
// 	});
//
// 	Route::get('/crud-jqgrid-form', function()
// 	{
// 		return View::make('decima-mario-gallegos::tutorials/ljp-demo2')
// 						->with('tutorials', 'none')
// 						->with('tutorialPost', 'block');
// 	});
//
// 	Route::get('/crud-custom-form', function()
// 	{
// 		return View::make('decima-mario-gallegos::tutorials/ljp-demo3-en')
// 						->with('tutorials', 'none')
// 						->with('tutorialPost', 'block');
// 	});
// });

Route::controller('/cms/tutorials', 'Mgallegos\DecimaMarioGallegos\Controllers\BlogManager');

Route::group(array('prefix' => '/cms/open-source-development/jquery-mg-validation'), function()
{
	Route::get('/getting-started', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/jquery-mg-validation')
						->with('doc', 'show active')
						->with('demo1', '');
	});

	Route::get('/demo1', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/jquery-mg-validation')
						->with('doc', '')
						->with('demo1', 'show active');
	});
});

Route::group(array('prefix' => '/cms/open-source-development/laravel-jqgrid'), function()
{
	Route::get('/getting-started', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/laravel-jqgrid-en')
						->with('doc', 'show active')
						->with('demo1', '')
						->with('demo2', '')
						->with('demo3', '');
	});

	Route::get('/demo1', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/laravel-jqgrid-en')
						->with('doc', '')
						->with('demo1', 'show active')
						->with('demo2', '')
						->with('demo3', '');
	});

	Route::get('/demo2', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/laravel-jqgrid-en')
						->with('doc', '')
						->with('demo1', '')
						->with('demo2', 'show active')
						->with('demo3', '');
	});

	Route::get('/demo3', function()
	{
		return View::make('decima-mario-gallegos::oss-dev/laravel-jqgrid-en')
						->with('doc', '')
						->with('demo1', '')
						->with('demo2', '')
						->with('demo3', 'show active');
	});

	Route::post('/grid0', function()
	{
	    return GridEncoder::encodeRequestedData(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\DocsGridRepository(), Request::all());
	});

	Route::post('/grid1', function()
	{
			GridEncoder::encodeRequestedData(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\InvoiceRepository(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\Invoice()), Request::all());
	});

	Route::post('/grid2', function()
	{
      $app = $this->app;
			GridEncoder::encodeRequestedData(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\InvoiceItemRepository($app['db']), Request::all());
	});

	Route::post('/grid3', function()
	{
			GridEncoder::encodeRequestedData(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\BookRepository(new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\Book()), Request::all());
	});

	Route::post('/crud', function()
	{
		$EloquentBook = new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\EloquentBook();

		switch (Request::get('oper'))
		{
			case 'add':
				return $EloquentBook->create(Request::except('id', 'oper'));
				break;
			case 'edit':
				return $EloquentBook->update(Request::get('id'), Request::except('id', 'oper'));
				break;
			case 'del':
				return  $EloquentBook->delete(Request::get('id'));
				break;
		}
	});

	Route::post('/crud1', function()
	{
		$input = Request::json()->all();
		unset($input['id'], $input['_token']);

		$EloquentBook = new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\EloquentBook();

		return $EloquentBook->create($input);
	});

	Route::post('/crud2', function()
	{
		$input = Request::json()->all();
		$id = $input['id'];
		unset($input['id'], $input['_token']);

		$EloquentBook = new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\EloquentBook();

		return $EloquentBook->update($id, $input);
	});

	Route::post('/crud3', function()
	{
		$EloquentBook = new \Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo\EloquentBook();

		return $EloquentBook->delete(Request::json()->get('id'));
	});
});
