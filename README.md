# Filament Lab Project

This is a lab project for learning Filament 3 with Laravel 11.

## Installation Steps

1. **Clone the repository**
    ```bash
    git clone https://github.com/bestiony/filament-lab.git
    cd filament-lab
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Copy the `.env` file and set up your environment variables**
    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**
    ```bash
    php artisan key:generate
    ```

5. **Run migrations**
    ```bash
    php artisan migrate
    ```

6. **Serve the application**
    ```bash
    php artisan serve
    ```

7. **Compile assets**
    ```bash
    npm run dev
    ```

## Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Filament Course by dari](https://www.youtube.com/watch?v=wGu8lgaK_v8)

Happy coding!
