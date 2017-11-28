# GUID
A simple class to generate GUID strings

## Installation with Composer
Run the following command in your project to add this package:
```bash
composer require gustavtrenwith/guid
```
Then run `composer update`

## Register Service Provider and Facade

Register the service providers and Facades in `config/app.php`
```
GustavTrenwith\Guid\GuidServiceProvider::class,
```
```
'Guid' => GustavTrenwith\Guid\GuidFacade::class,
```

Now you can use the  `Guid` facade anywhere in your application

## Feedback
For any questions or suggestions, feel free to contact me on `gtrenwith@gmail.com`
