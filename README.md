php artisan make:migration create_articles_table --create=articles
use the following code to create a migration and a table called articles

php artisan make:model Category --migration --controller
used the following code to create a new migration, controller and model for a new entity called Category


composer require laravel/ui="4.*" (To install the dependencies)
php artisan ui  bootstrap (To install bootstrap scaffolding)
npm install && npm run (to compile for the frontend)
php artisan ui:auth (to install authentication scaffolding)
to deploy easy authetication php artisan make:auth


Added a delete function, and created a route for it, 
then changed my route to use resources,
Created a category seeder ' php artisan make:seed CategorySeeder'
and a category Factory  'php artisan make:factory CategoryFactory'
