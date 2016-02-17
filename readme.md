# Lumen PHP Framework -- Sample RESTful Web Services Template

- Clone the sample lumen web service
- Install the dependencies using the composer

```sh
$ git clone https://github.com/smileofninja/lumenWebService.git
$ cd lumenWebService
$ composer install
```

## Middleware

Adding the controllers and models is explained in the lumen documentation. 

Middleware are important part of the lumen, they can added in two steps:

- Add the Middleware class in the App/Http/Middleware (In the template, i added JSONMiddleware)
- In bootstrap/app.php, adding the middleware binding and if required we can add alias as folllows:
```sh
$app->bind('App\Http\Middleware\JSONMiddleware', 'App\Http\Middleware\JSONMiddleware');
$app->alias('App\Http\Middleware\JSONMiddleware', 'json');
```
## Using Fractal with Laravel to create an API

According to the [offical documentation](http://fractal.thephpleague.com/) : 

> Fractal provides a presentation and transformation layer for complex data output, the like found in RESTful APIs, and works really well with JSON. Think of this as a view layer for your JSON/YAML/etc. When building an API it is common for people to just grab stuff from the database and pass it to json_encode(). This might be passable for “trivial” APIs but if they are in use by the public, or used by mobile applications then this will quickly lead to inconsistent output. 

In short. It is considered bad practice to output your database structure directly to the user. So we have to use a transformation layer to transform the data from the database to something that makes sense to the end user of that API.

To add the transformer, at first we need to install the fractal

```sh
 composer require league/fractal
```

Then, add the transformer class to the App/Transformers/ . We can use Collection (on more than one item) on the transformer (or) single item on the transformer.


## Routing 

When we are adding middlwares, we should add them in the App/Http/routes. For example in this template:
```sh
Route::group([
	'middleware' => [
                  'json'
		]
	], function ($group) {
            $group->get('faqs/{id}', 'SupportController@test');
});
```



## License

The Lumen RESTFul web service is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)



