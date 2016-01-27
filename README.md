Easypost for Laravel 5
==============

Integrates the Easypost PHP library with Laravel 5 via a ServiceProvider.

### Installation

Include laravel-easypost as a dependency in composer.json:

~~~
"mandofever78/laravel-easypost": "dev-master"
~~~

Run `composer install` to download the dependency.

Add the ServiceProvider to your provider array within `app/config/app.php`:

~~~
'providers' => [
    ...
    Mandofever78\LaravelEasypost\LaravelEasypostServiceProvider::class,
]
~~~

### Configuration

Add the following to your `.env` file:
~~~
EASYPOST_API_KEY=key_from_easypost
~~~

### Usage

You may use the [Easypost PHP Library](https://github.com/easypost/easypost-php) as normal within your application. The Easypost API will automatically be configured with your API Key, so you do not need to set it yourself.

### Example

A quick example in `routes.php`: 
~~~
<?php

use EasyPost\Address;

Route::get('/address', function() {

    return Address::create([
        "name"    => "Dr. Steve Brule",
        "street1" => "179 N Harbor Dr",
        "city"    => "Redondo Beach",
        "state"   => "CA",
        "zip"     => "90277",
        "phone"   => "310-808-5243"
    ]);

});

~~~