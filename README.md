# Meu Teste de API REST

### Configurndo o Projeto
* Clone o Projeto para seu Maquina
~~~Linux
git clone https://github.com/Casagrande-Lucas/teste-api.git
~~~

* Configure o arquivo .env
* Rode o comando do composer para baixar os pacotes.
~~~composer
composer update && composer install
~~~

* No terminal rode o comando artisan
~~~php
php artisan migrate:fresh --seed
php artisan serve --port=8080
~~~
* Depois só usar um client http como o Postman ou o seu navegador fazendo as requisições para as seguintes urls.

~~~linux
GET|HEAD        api/stores ............................................................... stores.index › Api\StoreController@index
POST            api/stores ............................................................... stores.store › Api\StoreController@store
GET|HEAD        api/stores/{store} ......................................................... stores.show › Api\StoreController@show
PUT|PATCH       api/stores/{store} ..................................................... stores.update › Api\StoreController@update
DELETE          api/stores/{store} ................................................... stores.destroy › Api\StoreController@destroy
GET|HEAD        api/stores/{store}/products ................................... stores.products.index › Api\ProductController@index
POST            api/stores/{store}/products ................................... stores.products.store › Api\ProductController@store
GET|HEAD        api/stores/{store}/products/{product} ........................... stores.products.show › Api\ProductController@show
PUT|PATCH       api/stores/{store}/products/{product} ....................... stores.products.update › Api\ProductController@update
DELETE          api/stores/{store}/products/{product} ..................... stores.products.destroy › Api\ProductController@destroy
~~~

>:exclamation::warning: Obs: Onde estiver na url /{store}/ e /{product}/ é esperado um id. :warning::exclamation:

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
