# Laravel-Wonde Bridge for WondeLTD API

This is a simple bridge for the Wonde LTD API, using Graham Campbell's Laravel Manager package as a framework.

## Installation

Add this package to your composer.json file:

```
composer require a-lawrence/laravel-wonde
```

Depending on your version of Laravel, it may be necessary to add your Service Provider to your `config/app.php` file:

```php

  ...
  ALawrence\LaravelWonde\WondeServiceProvider::class,
  ...
  
```

Along with the Alias:

```php

  ...
  'Wonde' => ALawrence\LaravelWonde\Facades\Wonde::class,
  ...
  
```

## Config

Within your .env file (or environment variables) you can define the following two elements:

```
WONDE_TOKEN=Your-Access-Token
WONDE_SCHOOL=Specific-School
```

_You will only need to set `WONDE_SCHOOL` if your application is a single school application._

If you'd like more control over the configuration, you could always publish the config file for this package and modify as necessary:

```php

php artisan vendor:publish --provider="ALawrence\LaravelWonde\WondeServiceProvider"

```

## Usage

Basic usage can be carried out by utilising dependency injection within your controller:

```php

class DemoController extends Controller
{
    protected $wonde;

    public function __construct(WondeManager $wonde)
    {
        $this->wonde = $wonde;
    }

    public function display()
    {
        foreach ($this->wonde->schools->all() as $school) {
            // Display school name
            echo $school->name . PHP_EOL;
        }
    }
}

```

If you'd prefer to _not_ use dependency injection, then that's fine too:

```php

public function display()
    {
        foreach (Wonde::connection("main")->schools->all() as $school) {
            // Display school name
            echo $school->name . PHP_EOL;
        }
    }

```

For all other usage, non-specific to this bridge, view the Wonde API Client documentation: https://github.com/wondeltd/php-client
