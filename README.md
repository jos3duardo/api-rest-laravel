criando  model, migration e controller de Products  
php artisan make:model Produtcs -mc     

colocar campos na migration
php artisan migrate       

criando controller de user  
php artisan make:controller --resource User    

criando uma validação para Products  
php artisan make:request ProductsRequest          

Configurando passport passport  
composer require laravel/passport     
php artisan migrate      
php artisan passport:install  
php artisan vendor:publish --tag=passport-components  
npm install
npm run dev

autenticação no laravel 6.x

composer require laravel/ui --dev

php artisan ui vue --auth
