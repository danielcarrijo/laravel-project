
## Laravel-Project

A simple website created using Laravel, HTML, CSS, JQuery and Bootstrap. You can see a [demo](https://laravel-webproject.000webhostapp.com/) here. This link will take you to a demostrantion version of the website hosted on webhostapp, however, if you want to get into CRUD area on demo, it is not possible since you need to log in. Therefore I suggest you to follow the steps below to set it up on your local machine, register your own user and go the home/CRUD area. 

## Getting Started
Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:danielcarrijo/todoapp.git
```

If you use https, use this instead

```bash
git clone https://github.com/danielcarrijo/todoapp.git
```

After cloning, run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

=
### Prerequisites

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

And finally, start the application:

```bash
php artisan serve
```

and visit [http://localhost:8000](http://localhost:8000) to see the application in action.

## Built With

* [Laravel](https://laravel.com) - The PHP Framework For Web Artisans
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
