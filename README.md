###  Mylerz Task 
This template includes the following components:
- Laravel 10
- SB Admin (Bootstrap v5.2.3)
- jQuery v3.5.1
- ChartJS v2.8.0
- Datatables v1.13.4
- livewire
- Repository Design pattern

### Description
This template provides the following features:
- Login functionality (Web)
- Database seeding
- Job control  (Enable or disable )
- Real time to  retrive date using livewire
- Area Chart 

### Instalation
To install and set up the template, follow these steps:
```sh
git clone https://github.com/Mahmoudatif93/Mylerz-Task-project
cd  Mylerz-Task
composer install


# Open .env and set up the database

php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
php artisan serve


### Finally
After completing the installation, you will have one user with the "admin" role.
 You can log in using the following credentials:

Email: admin@demo.com 
Password: 123456 

