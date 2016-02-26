#Assets for Laravel 4

The `PHPLegends\AssetsLaravel` provides a way to easy work with the assets.

Is possible
- concat CSS and Javascript files
- costumize a version of assets
- resize images


#Install

For install, add the line at the `composer.json` file:

```json
{
	"phplegends/assets-laravel" : "1.*"
}

```

#Service Provider and Facade

Add this in `app/config/app.php` file:
```php
	'providers' => array(
      //...
      'PHPLegends\AssetsLaravel\AssetsProvider'
	),

	'alias' => array(
		'Assets' => PHPLegends\AssetsLaravel\Assets'
	)

```

#Concatenating Assets


```php
   {{ Assets::concatScript(['js/jquery.min.js', 'js/app.js']) }}

```