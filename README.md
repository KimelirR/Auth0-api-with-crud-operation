## Auth0 implementation with laravel api

Having have integrated auth0 api with CRUD operation on books. 

Auth0 Gives an interactive guidelines. after successful installation of 
```
composer require Auth0/login 
```

Quickstarts on laravel API on dashboard make it easy to integrate.
It comes with vital default middleware to protect the routes. 

You need to set permissions on api Permission settings to enable scope authorization upon generation of the token

Run on
```
php artisan serve 
```
Try check on the browser
*http://localhost:8000/api/v1/books 


