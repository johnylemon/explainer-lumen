### Explainer for Laravel
A simple Laravel api documentation generator


### Features
This tool makes possible to explain every app route by using simple `explain` method via clean document accessible under configured route address.

### Installation


- add `\Lemon\ExplainerLumen\Providers\ExplainerLumenServiceProvider` to your `app/bootstrap.php` file
- add `$this->configure('explainer')` to your `app/bootstrap.php` file after provider line
- change bootstrap Application to provided by this package by changingthis lines

```
// $app = new Laravel\Lumen\Application(
//     dirname(__DIR__)
// );
```
into this
```
$app = new Lemon\ExplainerLumen\Application(
    dirname(__DIR__)
);
```
- copy `vendor/johnylemon/explainer/config/explainer.php` file to your `config` directory



### How to use

Simply call `explain` method on your routes:

```
$router->get('/', 'IndexController@index')->explain(\App\Explains\IndexRouteExplain::class);
```


### Examples

#### Explain file generation
To generate route explain file with name `IndexRouteExplain` in `app/Explains` directory simply type:

```
php artisan explain:route IndexRouteExplain

```

#### Explain example generation
To generate route explain example file with name `ValidationExample` in `app/Explains/Examples` directory simply type:

```
php artisan explain:example ValidationExample

```

#### generate documentation

Simply type
```
php artisan explain
```

and... enjoy!
