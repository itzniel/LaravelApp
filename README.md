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

Added a category and Article seeder and used a php fake to generate random contents
php artisan make:seed CategorySeeder to generate the seeder for the category
php artisan make:seed ArticleSeeder to generate the seeder for the article

Added a Factory for category and Article and define the fake contents to be created
php artisan make:factory CategoryFactory to generate a factory for Category
php artisan make:factory ArticleFactory to generate a factory for Article

'composer dump-autoload' to register the seeder created in the autoloader
'php artisan db:seed' to seed the database

Added New Routes, for anage, restore, and forcedelete.
Changed the masterblade template to use bootstrap, added the functions for manage, restore and forcedelete.
Enabled the softdelete function
