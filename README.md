# (Laravel's Facade in PhalconPhp)

I have been a user of Laravel for quite a while. I love the framework and the beauty of the syntax. But It is unfortunate that the speed is not as promising. when you enter the page bunch of classes will preload and then your application will start then will try to respond to your request. (Ölme eşşeğim ölme)

I have met the PhalconPHP and the speed was incredible. But the sytax after laravel seemed terribly bad. "Bad" but not in a pathatic way, I included Taylor Otwell's Facade and made some changes then it turned into an awesome Framework just like laravel.

Thanks to Taylor for showing me how to beautify things.

This is just a setup for a good laravel like file-structure.

==========================================================

Here is a list;

 * Laravel's Facades such as ```php View::setJsonContent(["a"=>"b"])```
 * Laravel's Routes.php is also present in this PhalconPhp setup to define routes just as you did in Laravel.


Laravel and Phalconphp are both making use of dependancy injection. 

Phalconphp's di may look like this;
```php
$di->set('router', function(){
    //require __DIR__.'/../routes.php';
    $router = new \Phalcon\Mvc\Router();
    return $router;
});

$di->set('response', function(){
    $response = new \Phalcon\Http\Response();
    return $response;
});
```
And our facades in the path  of
App / config / Facades 
May look like this;

Route.php
```php
class Route extends Facade
{
		/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'router'; }

}
```
or 

Response.php
```php
class Response extends Facade
{
		/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'response'; }

}
```

See! nothing really different. Add your own Facade to point to your dependancy Injected class.



================================================================

I also added a new directory called Resources which also has a namespace of "Resources\\{controller}".
I used the controllers inside Resources just for app/routes.php to define only api routes.
It seemed more conventional to separate resources as rest and controllors as to just serve for other operations.

A route can be defined as such;

```php
Route::add("/deneme", [
	'namespace' => 'Resources',
	"controller" => "Dene",
	"action" => "bu"
]);
```
Router is not as flexible as Laravel's but still It does the job.





Contact or Ask questions on Twitter: [Twitter](https://www.twitter.com/OguzhanPiskin_) 


### Stuff used to make this:
- Laravel's Facade Class
