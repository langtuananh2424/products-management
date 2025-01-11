# Product Management Application

This is simple CRUD application built with Laravel.

## Prerequisites

- PHP 8.3 or higher
- Composer
- Mysql
- Node.js and npm (for fontend assets)

## Setup

1. Clone the repository:
   ```
   git clone https://github.com/langtuananh2424/products-management.git
   cd products-management
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Copy the `.env.example` file to `.env`:
   ```
   cp .env.example .env
   ```
   The default configuration uses Mysql.

4. Genarate application key:
   ```
   php artisan key:genarate
   ```

5. Run database migrations and seed the database:
   ```
   php artisan migrate --seed
   ```
   
6. Install and compile frontend assets:
   ```
   npm install
   npm run dev
   ```
   
7. Start the devolopment server:
   ```
   php artisan serve
   ```

## Features

- Create, Read, Update and Delete products.
- Paginated products.
- Form validation.
