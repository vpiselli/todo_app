# Task app

This is a simple Task app

## Getting Started

Follow these steps to clone and run the project locally:

1. Clone the repository:

   ```bash
   git clone https://github.com/vpiselli/todo_app
   cd todo_app

2. Install PHP dependencies using Composer:
    ```bash
    composer install

3. Install Node.js dependencies:
    ```bash
    npm install

4. Create a .env file based on the .env.example file. Make sure to set up the SQLite database in the .env file:
    ```bash
    DB_CONNECTION=sqlite

    Note: You need to create a file in the database folder with the name database.sqlite

    database/database.sqlite

5. Generate the application key:
    ```bash
    php artisan key:generate

6. Run database migrations:
    ```bash
    php artisan migrate

7. Build the frontend assets:
    ```bash
    npm run dev

8. Serve the application:
    ```bash
    php artisan serve

The application should now be accessible at http://localhost:8000.
