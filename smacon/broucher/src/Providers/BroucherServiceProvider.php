<?php

namespace Smacon\Broucher\Providers;

use Illuminate\Support\ServiceProvider;

class BroucherServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'broucher');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'broucher');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerBroucher();
        $this->registerFacade();
        $this->registerBindings();
        //$this->registerCommands();
    }


    /**
     * Register the application bindings.
     *
     * @return void
     */
    protected function registerBroucher()
    {
        $this->app->bind('broucher', function($app) {
            return new Broucher($app);
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Broucher', 'Lavalite\Broucher\Facades\Broucher');
        });
    }

    /**
     * Register bindings for the provider.
     *
     * @return void
     */
    public function registerBindings() {
        // Bind facade
        $this->app->bind('smacon.broucher', function ($app) {
            return $this->app->make('Smacon\Broucher\Broucher');
        });

        // Bind Category to repository
        $this->app->bind(
            'Smacon\Broucher\Interfaces\CategoryRepositoryInterface',
            \Smacon\Broucher\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind Product to repository
        $this->app->bind(
            'Smacon\Broucher\Interfaces\ProductRepositoryInterface',
            \Smacon\Broucher\Repositories\Eloquent\ProductRepository::class
        );

        $this->app->register(\Smacon\Broucher\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Smacon\Broucher\Providers\RouteServiceProvider::class);
            }

    /**
     * Merges user's and broucher's configs.
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/broucher.php', 'broucher'
        );
    }

    /**
     * Register scaffolding command
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\MakeBroucher::class,
            ]);
        }
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['smacon.broucher'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('smacon/broucher.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/broucher')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/broucher')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
