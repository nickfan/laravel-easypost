Easypost for Laravel 4
==============

Integrates the Easypost PHP library with Laravel 4 via a ServiceProvider, config, and Blade extensions.

*This is originally a fork from the [abodeo/laravel-stripe](https://github.com/Abodeo/laravel-stripe) package*

### Installation

Include laravel-easypost as a dependency in composer.json:

~~~
"mandofever78/laravel-easypost": "dev-master"
~~~

Run `composer install` to download the dependency.

Add the ServiceProvider to your provider array within `app/config/app.php`:

~~~
'providers' => array(

    'Mandofever78\LaravelEasypost\LaravelEasypostServiceProvider'

)
~~~

Finally, publish the configuration files via `php artisan config:publish mandofever78/laravel-easypost`.


### Configuration

It is advisable to keep all of your sensitive configuration out of your configuration files. Instead, utilize Laravel's "dot files" to keep them out of source control and making them easily overridable on dev environments.

If you have not setup a "dot file", read Laravel's "[Protecting Sensitive Configuration](http://laravel.com/docs/configuration#protecting-sensitive-configuration) for detailed setup instructions. To quickly get up an running, simply create a `.env.php` file in the same directory as you apps `composer.json` file. Then add your Stripe API credentials to it.

~~~
<?php
return array(
  'easypost' => array(
    'api_key' => 'my-api-key',
  )
);
~~~

If you insist on keeping your API credentials in your config, you can set your API Key and Publishable Key in `app/config/packages/abodeo/laravel-stripe/stripe.php`:

~~~
<?php
return array(
  'api_key' => 'my-api-key',
);
~~~

### Usage

You may use the [Easypost PHP Library] as normal within your application. The Easypost API will automatically be configured with your API Key, so you do not need to set it yourself.


