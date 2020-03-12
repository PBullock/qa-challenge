Coding Challenge - Simple Q&A Site
==================================

# Install

## Local Using Docker:

- create a .env file (copy .env.exmaple) 
- Add the database connection details as defined in the `docker-compose.yaml`
- run `docker-compose up` from the repo root folder.
- enter the terminal for web container to `/var/www/html/` and run the artisan command `php artisan migrate`
- create questions and answers


### example db connection values for .env:
```
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=hack_qa
DB_USERNAME=postgres
DB_PASSWORD=hackqapass
```
