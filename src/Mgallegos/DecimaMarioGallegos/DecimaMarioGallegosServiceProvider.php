<?php namespace Mgallegos\DecimaMarioGallegos;

use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class DecimaMarioGallegosServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	* Bootstrap any application services.
	*
	* @return void
	*/
	public function boot()
	{
		include __DIR__.'/../../routes.php';

		include __DIR__.'/../../macros.php';

		$this->loadViewsFrom(__DIR__.'/../../views', 'decima-mario-gallegos');

		$this->loadTranslationsFrom(__DIR__.'/../../lang', 'decima-mario-gallegos');

		$this->publishes([
				__DIR__ . '/../../config/config.php' => config_path('mario-gallegos-general.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/config.php', 'mario-gallegos-general'
		);

		$this->publishes([
				__DIR__ . '/../../config/journal.php' => config_path('mario-gallegos-journal.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/journal.php', 'mario-gallegos-journal'
		);

		$this->publishes([
    __DIR__.'/../../migrations/' => database_path('/migrations')
		], 'migrations');

		$this->registerJournalConfiguration();

		// $this->registerModuleTableNameInterface();

		// $this->registerModuleAppManagementInterface();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	* Register journal configuration.
	*
	* @return void
	*/
	protected function registerJournalConfiguration()
	{
		$journalConfiguration = $this->app->make('AppJournalConfigurations');

		$this->app->instance('AppJournalConfigurations', array_merge($journalConfiguration, $this->app['config']->get('mario-gallegos-journal')));
	}

	/**
	* Register a ... interface instance.
	*
	* @return void
	*/
	protected function registerModuleTableNameInterface()
	{
		$this->app->bind('Mgallegos\DecimaMarioGallegos\Module\Repositories\ModuleTableName\ModuleTableNameInterface', function($app)
		{
			$AuthenticationManager = $app->make('App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface');

			return new \Mgallegos\DecimaMarioGallegos\Module\Repositories\ModuleTableName\EloquentModuleTableName( new \Mgallegos\DecimaMarioGallegos\Module\ModuleTableName() , $AuthenticationManager->getCurrentUserOrganizationConnection());
		});
	}

	/**
	* Register a ... interface instance.
	*
	* @return void
	*/
	protected function registerModuleAppManagementInterface()
	{
		$this->app->bind('Mgallegos\DecimaMarioGallegos\Module\Services\ModuleTableNameManagement\ModuleAppManagementInterface', function($app)
		{
			return new \Mgallegos\DecimaMarioGallegos\Module\Services\ModuleTableNameManagement\ModuleAppManager(
				$app->make('App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface'),
				$app->make('App\Kwaai\Security\Services\JournalManagement\JournalManagementInterface'),
				$app->make('App\Kwaai\Security\Repositories\Journal\JournalInterface'),
				new	\Mgallegos\LaravelJqgrid\Encoders\JqGridJsonEncoder($app->make('excel')),
				new	\Mgallegos\DecimaMarioGallegos\Module\Repositories\ModuleTableName\EloquentModuleTableNameGridRepository(
					$app['db'],
					$app->make('App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface'),
					$app['translator']
				),
				$app->make('Mgallegos\DecimaMarioGallegos\Module\Repositories\ModuleTableName\ModuleTableNameInterface'),
				new Carbon(),
				$app['db'],
				$app['translator'],
				$app['config']
			);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
