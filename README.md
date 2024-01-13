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

	1. Run this in your terminal :

	````
        git clone https://github.com/gmanikandan-dev/laravel8_multiple_features.git 
    ````
    
    ````
        cp .env.example .env
    ````
	2. create & set up your database on .env file
    3. Run this your terminal:

    ````
        composer install 
    ````

    ````
    php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"

    ````

    ````
        php artisan migrate:fresh --seed
    ````

	````
        php artisan serve
    ````
	4. Open the development server http://127.0.0.1:8000
    5. Register & use! :)