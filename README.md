Coding Challenge - Simple Q&A Site
==================================

# Install

## Using Docker:

- create a .env file (copy .env.exmaple) in `/src/hackqa`
- Add the database connection details as defined in the `docker-compose.yaml`
- run `docker-compose up` from the repo root folder.
- enter the terminal for web container to `/var/www/html/hackqa` and run the artisan command `php artisan migrate`
- create questions and answers
