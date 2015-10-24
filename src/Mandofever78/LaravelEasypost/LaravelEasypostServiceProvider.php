<?php namespace Mandofever78\LaravelEasypost;

use Illuminate\Support\ServiceProvider;

class LaravelEasypostServiceProvider extends ServiceProvider {

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
        $this->package('mandofever78/laravel-easypost');

        /*
         * Load Stripe configuration
         *
         * API keys should be utilizing Laravel's "dot files" to keep them out of source
         * control and making them easily overridable on dev environments
         *
         * Read more: http://laravel.com/docs/configuration#environment-configuration
         */
        $api_key = isset($_ENV['easypost.api_key']) ? $_ENV['easypost.api_key'] : $this->app['config']->get('laravel-easypost::easypost.api_key');
        \EasyPost\EasyPost::setApiKey($api_key);
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
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
