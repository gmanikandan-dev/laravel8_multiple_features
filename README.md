## Laravel Multi-Features
#### **Laravel_8_multiple_feature** has the following listed features :)


- User import/export xlsx
- Employee export as pdf
- Multiple image upload gallery
- Dynamically generate qr-code
- To send Mail & Notification
- Spatie multimedia files upload
- Add to cart

## _Setup development_

>  _Step 1. Run this in your terminal :

````
    git clone https://github.com/gmanikandan-dev/laravel8_multiple_features.git 
````

>  _Step 2.

````
    cp .env.example .env
````

>  _Step 3. create & set up your database on .env file
>  _Step 4. Run this your terminal:

````
    composer install 
````

>  _Step 5.

````
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"

````

>  _Step 6.

````
    php artisan migrate:fresh --seed
````

>  _Step 7.

````
    php artisan serve
````
>  _Step 8. Open the development server http://127.0.0.1:8000
>  _Step 9. Register & use!