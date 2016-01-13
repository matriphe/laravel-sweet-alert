## Laravel 5.1 SweetAlert

Laravel package to use the javascript SweetAlert with Laravel Service Provider.
Simple package, but effective.

##Installation

Add to your composer.json file the package.

```
"repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/matriphe/laravel-sweet-alert.git"
        }
    ],
```

In `required` section, add this

```
"infinety/sweetalert": "dev-matriphe"
```

Update your dependencies

```
composer update
```

After install this package you have to set the service provider on your config/app.php file

```
Infinety\SweetAlert\AlertServiceProvider::class
```

Add alias

```
'Swalert' => Infinety\SweetAlert\Facade::class,
```

Copy the required assets and config of SweetAlert to your public folder. Those assets would be place in the css and js respective directory.

```
php artisan vendor:publish --tag=alerts
```

Then in your master view add those styles and scripts. Put this style between the <head> </head> tags

```
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
```

Add the JS script before close your </body> tag.

```
<script src="js/sweetalert.js"></script>
```

Include the alerts view to your master view. Add this code right after set the JS script file.

```
@include('Alerts::alerts')
```

###Usage

On your controllers is a perfect place to use it, any way you can fire the alerts from jobs or events.

```
Swalert::error('Title', 'Message')


Swalert::success('Title', 'Message')


Swalert::overlay('Title', 'Message')
```

###SweetAlert website

http://t4t5.github.io/sweetalert/

### Thanks
Special thanks to https://github.com/socieboy/alerts for this package but changed a few things and wanted to learn myself how to make this sort of package also, so Kudos to Socieboy :)